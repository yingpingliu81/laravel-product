<?php


namespace App\Http\Services;

use App\Models\Cate;
use App\Models\Product;
use Illuminate\Database\QueryException;

class ProductService
{

    const SORT_STEP = 10;

    public function createProduct($request) {

        try {
            $product = Product::create($request->except('cate_id','syns'));
            $product->sort = $this->getNewSortNumber();
            $product->cates()->sync($request->cate_id);
            $product->save();
            if($request->syns && count($request->syns) > 0) {
                foreach ($request->syns as $syn) {
                    $otherProduct = new Product($request->except('cate_id','syns'));
                    $otherProduct->setConnection($syn);
                    $otherProduct->save();
                }
            }
            $product->forgetCache();
            return $product;
        } catch (QueryException $e) {
            throw $e;
        }
    }

    public function getDefaultProductsList($request) {
        if($request->cate) {
            return Product::whereHas('cates', function ($query) use ($request){
                $query->where('cate.id', $request->cate);
            })->active()->priority()->get();
        }
        return Product::with("cates")->active()->priority()->get();
    }


    public function deleteProduct($product) {
        try {
            $product->forgetCache();
            $product->delete();
        } catch (\Exception $e) {
            throw  $e;
        }
    }

    public function updateProduct($request,$product) {
        try {
            $product->update($request->except('cate_id'));
            $product->cates()->sync($request->cate_id);
            $product->save();
            $product->forgetCache();
        } catch (QueryException $e) {
            throw $e;
        }
    }

    public function getProductCates () {
       return Cate::orderBy("title")->get();
    }


    private function getNewSortNumber() {
        return Product::max('sort') + self::SORT_STEP;
    }

    public function setVisible(Product $product) {
        $product->status = $product->status == Product::STATUS_INVISIBLE ? Product::STATUS_VISIBLE : Product::STATUS_INVISIBLE;
        $product->save();
        $product->forgetCache();
        return $product;
    }

    public function exchangePosition($request) {
        if($request->source || $request->dest) {
            $source = Product::find($request->source);
            $dest = Product::find($request->dest);
            $temp = $source->sort;
            $source->sort = $dest->sort;
            $dest->sort = $temp;
            $source->save();
            $dest->save();
            $dest->forgetCache();
            echo $source->sort;
        }
    }
}
