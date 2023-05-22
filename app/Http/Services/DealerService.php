<?php


namespace App\Http\Services;

use App\Http\Requests\DealerRequest;
use App\Models\Dealer;
use Illuminate\Database\QueryException;

class DealerService
{

    const SORT_STEP = 10;

    public function createDealer($request) {
        try {
            $dealer = Dealer::create($request->except('_method'));
            $dealer->sort = $this->getNewSortNumber();
            $dealer->save();
            return $dealer;
        } catch (QueryException $e) {
            throw $e;
        }
    }

    public function getDefaultList() {
        return Dealer::priority()->get();
    }


    public function deleteDealer($dealer) {
        try {
            $dealer->delete();
        } catch (\Exception $e) {
            throw  $e;
        }
    }

    public function updateDealer(DealerRequest $request,$dealer) {
        try {
            $dealer->update($request->except('_method'));
            $dealer->save();
        } catch (QueryException $e) {
            throw $e;
        }
    }

    public function setVisible(Dealer $dealer) {
        $dealer->status = $dealer->status == Dealer::STATUS_INVISIBLE ? Dealer::STATUS_VISIBLE : Dealer::STATUS_INVISIBLE;
        $dealer->save();
        return $dealer;
    }

    public function exchange($request) {
        if($request->source || $request->dest) {
            $source = Dealer::find($request->source);
            $dest = Dealer::find($request->dest);
            $temp = $source->sort;
            $source->sort = $dest->sort;
            $dest->sort = $temp;
            $source->save();
            $dest->save();
        }
    }


    private function getNewSortNumber() {
        return Dealer::max('sort') + self::SORT_STEP;
    }

}
