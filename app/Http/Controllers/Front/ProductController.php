<?php

namespace App\Http\Controllers\Front;
use App\Models\Blog;
use App\Models\Cate;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use View;


class ProductController extends Controller
{
    public function __construct()
    {
        $latest_news = Cache::rememberForever("latest_news", function () {
            return Blog::priority()->news()->latest()->take(7)->get();
        });
        View::share(compact('latest_news'));
    }

    public function list($slug) {
        $cate = Cache::rememberForever($slug, function () use ($slug) {
            return Cate::where('type_slug','accessories')->where('slug',$slug)->with('visibleProducts')->first();
        });
        return view('front.product.list', compact('cate'));
    }
    public function detail($slug, $product) {
        $product = Product::where('slug', $product)->first();
        $cate = Cate::where('type_slug','accessories')->where('slug',$slug)->with('visibleProducts')->first();
        return view('front.product.detail', compact('product','cate'));
    }

    public function latest() {
        $products = Product::with('cates')->visible()->latest()->take(20)->get();
        return view('front.product.latest', compact('products'));
    }

    public function search(Request $request) {
        $products = Product::visible()->where(function ($query)  use ($request){
            $query->where('title', 'like', '%'.$request->keyword.'%')
                ->orWhere('sku', 'like', '%'.$request->keyword.'%')
                ->orWhere('feature','like', '%'.$request->keyword.'%');
        })->get();
        return view('front.product.search', compact('products'));

    }

    private function getCateByType($type_slug) {
        return Cate::where('type_slug',$type_slug)->orderBy('title')->with('visibleProducts')->get();
    }


}
