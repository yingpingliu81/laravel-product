<?php

namespace App\Http\Controllers\Front;

use App\Models\Blog;
use App\Models\Cate;
use App\Models\Contact;
use App\Models\Dealer;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use LanguageDetection\Language;
use View;

class IndexController extends Controller
{
    public function __construct()
    {
        $latest_news = Cache::rememberForever("latest_news", function () {
            return Blog::priority()->news()->latest()->take(7)->get();
        });
        View::share(compact('latest_news'));
    }

    public function home() {
        return view('front.index');
    }

    public function about() {
        return view('front.about.about-us');
    }

    public function faq() {
        $faqs = Blog::priority()->active()->faqs()->get();
        return view('front.about.faq', compact('faqs'));
    }

    public function news() {
        $news = Cache::rememberForever("list_news", function () {
            return Blog::priority()->active()->news()->get();
        });
        return view('front.news.list', compact('news'));
    }

    public function newsDetail($slug) {
        $news = Blog::where('slug',$slug)->first();
        return view('front.news.detail', compact('news'));
    }

    public function blogs() {
        $blogs = Cache::rememberForever("list_blogs", function () {
            return Blog::priority()->active()->blogs()->get();
        });
        return view('front.blogs.list', compact('blogs'));
    }

    public function blogDetail($slug) {
        $blogs = Blog::where('slug',$slug)->first();
        return view('front.blogs.detail', compact('blogs'));
    }

    public function submitFeedback(Request $request) {
        if($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|string',
                'message' => 'required|string',
                'company' => '|not_regex:/^(google)$/i',
                'g-recaptcha-response' => 'recaptcha',
            ]);
            $ld = new Language;
            $res = $ld->detect($request->message)->bestResults()->close();
            $res = array_keys($res);
            if($res && (!in_array('en', $res) && !in_array('zh-Hans', $res))){
                return back()->with('message','only english and chinese allow');
            }

            $data = $request->except('_method');
            $data['type'] = Contact::TYPE_CUSTOMER;
            $res = Contact::create($data);
            try {
                $adminNotifyEmails = json_decode(config('app.admin_notified_mails'), true);
                $data['contact'] = $data['message'];
                Mail::send('mails.contact_notify', $data, function ($message) use ($adminNotifyEmails, $data) {
                    $message->subject((empty($data['source']) ? config('app.name') : $data['source']).' Receive Contact Form '.date('Y-m-d h:i'));
                    $message->to(data_get($adminNotifyEmails,0,'sales@ptv.com.au'));
                    $message->replyTo($data['email']);
                });
            } catch (\Exception $exception) {

                Log::channel('mail')->error($exception->getMessage());
            }

            return back()->with('success','Thanks for contact us, we have received your information');
        }
        $source = $request->get('source', '');
        return view('front.contact.form', compact('source'));
    }

    public function dealer() {
        $dealers = Dealer::dealers()->orderBy('state')->priority()->get()->groupBy('state');
        $latest_dealer = Dealer::dealers()->orderBy('updated_at','desc')->first();
        return view('front.dealers.index', compact('dealers','latest_dealer'));
    }


    public function support($slug) {
        $installers = [];
        $faqs = [];
        $latest_dealer = '';
        if($slug == 'faq') {
            $faqs = Blog::faqs()->active()->priority()->get();
        }
        if($slug == 'approved-installers') {
            $installers = Cache::rememberForever("approved-installers", function () {
                return Dealer::where('type', Dealer::TYPE_INSTALLER)->priority()->visible()->get()->groupBy('state');
            });
            $latest_dealer = Dealer::dealers()->orderBy('updated_at','desc')->first();
        }
        return view("front.support.$slug", compact('faqs','installers','latest_dealer'));
    }

    public function registration(Request $request) {
        if( $request->isMethod('post')) {
            try {
                $request->validate([
                    'name' => 'required|string',
                    'email' => 'required|string',
                    'g-recaptcha-response' => 'recaptcha',
                ]);
                $contact = Contact::create($request->except('_method'));
                $contact->type = Contact::TYPE_WARRANTY;
                $contact->save();
                return back()->with('success','Thanks for contact us, we have received your information');
            } catch (\Exception $e) {
                return back()->with('error', $e->getMessage());
            }
        }
        return view("front.support.warranty-registration");
    }

    public function product($slug) {
        if($slug == 'solar-roof-vent') {
            $cate = Cate::where('slug','main1')->with('visibleProducts')->first();
            $product = $cate->visibleProducts()->first();
            return view("front.product.$slug", compact( 'product'));
        }

        if($slug == 'solar-wall-exhaust-fan') {
            $cate = Cate::where('slug','main2')->with('visibleProducts')->first();
            $product = $cate->visibleProducts()->first();
            return view("front.product.$slug", compact('product'));
        }
        if($slug == 'commercial-solar-roof-ventilation') {
            $cate = Cate::where('slug','main3')->with('visibleProducts')->first();
            $product = $cate->visibleProducts()->first();
            return view("front.product.$slug", compact('product'));
        }

        if($slug == 'photo-gallery') {
            return view("front.product.$slug");
        }
        if($slug == 'where-to-buy') {
            $dealers = Cache::rememberForever("where-to-buy", function () {
                return Dealer::where('type', Dealer::TYPE_DEALER)->priority()->visible()->get()->groupBy('state');
            });

            $latest_dealer = Dealer::dealers()->orderBy('updated_at','desc')->first();
            return view("front.product.$slug", compact('dealers','latest_dealer'));
        }

        if($slug == 'lithium-batteries-dealers') {
            $dealers = Cache::rememberForever("lithium-batteries-dealers", function () {
                return Dealer::where('type', Dealer::TYPE_BATTER_DEALER)->priority()->visible()->get()->groupBy('state');
            });
            $latest_dealer = Dealer::dealers()->orderBy('updated_at','desc')->first();

            return view("front.product.$slug", compact('dealers', 'latest_dealer'));
        }
    }

    public function accessories($slug) {
        $slug = $slug == "batteries" ? "batteries-large" : $slug;

        $cates = Cache::rememberForever("accessories", function () {
            return Cate::where('type_slug','accessories')->where('slug', '!=', 'batteries')->priority()->get();
        });

        $cate = Cache::rememberForever("accessories".$slug, function () use ($slug) {
            return Cate::where('type_slug','accessories')->where('slug',$slug)->with('visibleProducts')->first();
        });


        $subCates = Cate::where('type_slug', $slug)->orderBy('sort')->with('visibleProducts')->get();

        return view("front.product.accessories", compact('cates','cate', 'subCates'));
    }

    public function detail($cateSlug, $product) {
        $product = Product::where('slug', $product)->first();
        if(!$product) return redirect()->route('home');
        $cates = Cate::where('type_slug','accessories')->where('slug', '!=', 'batteries')->priority()->get();
        $cate_slug = $cateSlug;
        return view('front.product.detail', compact('product','cates','cate_slug'));
    }

    public function search(Request $request) {
        $products = Product::visible()->where(function ($query)  use ($request){
            $query->where('title', 'like', '%'.$request->keyword.'%')
                ->orWhere('sku', 'like', '%'.$request->keyword.'%')
                ->orWhere('feature','like', '%'.$request->keyword.'%');
        })->get();
        return view('front.product.search', compact('products'));
    }

    public function policies() {
        return view("front.policies");
    }
    public function usefulLinks() {
        return view("front.links");
    }
}
