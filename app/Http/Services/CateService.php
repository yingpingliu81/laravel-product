<?php


namespace App\Http\Services;

use App\Models\Cate;
use Illuminate\Database\QueryException;

class CateService
{

    const SORT_STEP = 10;

    public function createCate($request) {
        try {
            $cate = Cate::create($request);
            $cate->sort = $this->getNewSortNumber();
            $cate->save();
            $cate->forgetCache();
            return $cate;
        } catch (QueryException $e) {
            throw $e;
        }
    }

    public function getDefaultCatesList() {
        return Cate::withCount("products")->priority()->get();
    }


    public function deleteCate($cate) {
        try {
            if($cate->products->count() > 0) throw new \Exception("please firstly delete products under ".$cate->title);
            $cate->forgetCache();
            $cate->delete();
        } catch (\Exception $e) {
            throw  $e;
        }
    }

    public function updateCate($request,$cate) {
        try {
            $cate->update($request);
            $cate->save();
            $cate->forgetCache();
        } catch (QueryException $e) {
            throw $e;
        }
    }


    private function getNewSortNumber() {
        return Cate::max('sort') + self::SORT_STEP;
    }

    public function exchangePosition($request) {
        if($request->source || $request->dest) {
            $source = Cate::find($request->source);
            $dest = Cate::find($request->dest);
            $temp = $source->sort;
            $source->sort = $dest->sort;
            $dest->sort = $temp;
            $source->save();
            $dest->save();
            $dest->forgetCache();
        }
    }

}
