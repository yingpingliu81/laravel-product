<?php

namespace App\Http\Controllers\Front;

use App\Models\Blog;
use App\Models\Cate;
use App\Models\Contact;
use App\Models\Dealer;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;

class IndexController extends Controller
{
    public function __construct()
    {
        $latest_news = Blog::priority()->news()->latest()->take(7)->get();
        View::share(compact('latest_news'));
    }

    public function home() {
        $latest_products = Product::visible()->latest()->take(8)->with('cates')->get();
        $latest_news = Blog::priority()->news()->take(5)->get();
        return view('front.index', compact('latest_products','latest_news'));
    }

    public function about() {
        return view('front.about.about-us');
    }

    public function faq() {
        $faqs = Blog::priority()->active()->faqs()->get();
        return view('front.about.faq', compact('faqs'));
    }

    public function news() {
        $news = Blog::priority()->active()->news()->get();
        return view('front.news.list', compact('news'));
    }

    public function newsDetail($slug) {
        $news = Blog::where('slug',$slug)->first();
        return view('front.news.detail', compact('news'));
    }

    public function blogs() {
        $blogs = Blog::priority()->active()->blogs()->get();
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
                'g-recaptcha-response' => 'recaptcha',
            ]);
            $data = $request->except('_method');
            $data['type'] = Contact::TYPE_CUSTOMER;
            $res = Contact::create($data);
            return back()->with('success','Thanks for contact us, we have received your information');
        }
        return view('front.contact.form');
    }

    public function dealer() {
        $dealers = Dealer::dealers()->orderBy('state')->get()->groupBy('state');
        return view('front.dealers.index', compact('dealers'));
    }


    public function support($slug) {
        $installers = [];
        $faqs = [];
        if($slug == 'faq') {
            $faqs = Blog::faqs()->active()->priority()->get();
        }
        if($slug == 'approved-installers') {
            $installers = Dealer::where('type', Dealer::TYPE_INSTALLER)->priority()->visible()->get()->groupBy('state');
        }
        return view("front.support.$slug", compact('faqs','installers'));
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
            $dealers = Dealer::where('type', Dealer::TYPE_DEALER)->priority()->visible()->get()->groupBy('state');
            return view("front.product.$slug", compact('dealers'));
        }

        if($slug == 'lithium-batteries-dealers') {
            $dealers = Dealer::where('type', Dealer::TYPE_BATTER_DEALER)->priority()->visible()->get()->groupBy('state');
            return view("front.product.$slug", compact('dealers'));
        }
    }

    public function accessories($slug) {
        $cates = Cate::where('type_slug','accessories')->priority()->get();
        $cate = Cate::where('type_slug','accessories')->where('slug',$slug)->with('visibleProducts')->first();
        return view("front.product.accessories", compact('cates','cate'));
    }

    public function detail($cate_slug, $product) {
        $product = Product::where('slug', $product)->first();
        if(!$product) return redirect()->route('home');
        $cates = Cate::where('type_slug','accessories')->priority()->get();
        return view('front.product.detail', compact('product','cates','cate_slug'));
    }

    public function policies() {
        return view("front.policies");
    }
    public function usefulLinks() {
        return view("front.links");
    }
}
