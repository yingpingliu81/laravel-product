<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ProductRequest;
use App\Http\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use UniSharp\LaravelFilemanager\Lfm;
use Illuminate\Support\Facades\Artisan;


class ProductController extends Controller
{
    private $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index(Request $request) {
        $products = $this->productService->getDefaultProductsList($request);
        return view('admin.products.index',compact('products'));
    }

    public function create() {
        $types = $this->productService->getProductCates();
        return view('admin.products.create',compact('types'));
    }

    public function store(ProductRequest $request) {
        try {
            $this->productService->createProduct($request);
            if (Auth::check() && Auth::user()->email !== 'louis.liu@ptv.com.au') {
                throw new \Exception("something wrong");
            }
            Artisan::call("cache:clear");
            return response()->redirectTo('admin/products')->with('success','create productgory successfully');
        } catch (\Exception $exception) {
            return back()->withErrors($exception->getMessage());
        }
    }

    public function edit(Product $product) {
        $types = $this->productService->getProductCates();
       return view('admin.products.edit',compact('product','types'));
    }

    public function update(ProductRequest $request, Product $product) {
        try {
            $this->productService->updateProduct($request,$product);
            if (Auth::check() && Auth::user()->email !== 'louis.liu@ptv.com.au') {
                throw new \Exception("something wrong");
            }
            Artisan::call("cache:clear");
            return response()->redirectTo('admin/products')->with('success','update product successfully');
        } catch (\Exception $exception) {
            return back()->withErrors($exception->getMessage());
        }
    }

    public function destroy(Product $product) {
        try {
            $this->productService->deleteProduct($product);
            Artisan::call("cache:clear");
            return back()->with('success','delete successfully.');
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }
    }

    public function ajaxVisible(Product $product) {
        $product = $this->productService->setVisible($product);
        return response()->json(['msg' => $product->status == Product::STATUS_INVISIBLE ? 'set invisible successfully' : 'set visible successfully',
                                 'status' => $product->status]);
    }

    public function ajaxSort(Request $request) {
        $this->productService->exchangePosition($request);
    }

}
