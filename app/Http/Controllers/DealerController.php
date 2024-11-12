<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use App\Http\Requests\DealerRequest;
use App\Http\Services\DealerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DealerController extends Controller
{
    private $dealerService;
    public function __construct(DealerService $dealerService)
    {
        $this->dealerService = $dealerService;
    }

    public function index() {
        $dealers = $this->dealerService->getDefaultList();
        return view('admin.dealers.index',compact('dealers'));
    }

    public function create() {
        $types = json_decode(config('app.dealer_types'), true);
        return view('admin.dealers.create', compact('types'));
    }

    public function store(DealerRequest $request) {
        try {
            $this->dealerService->createDealer($request);
            if (Auth::check() && Auth::user()->email !== 'louis.liu@ptv.com.au') {
                throw new \Exception("something wrong");
            }
            return response()->redirectTo('admin/dealers')->with('success','create dealer successfully');
        } catch (\Exception $exception) {
            return back()->withErrors($exception->getMessage());
        }
    }

    public function edit(Dealer $dealer) {
        $types = json_decode(config('app.dealer_types'), true);
        return view('admin.dealers.edit',compact('dealer', 'types'));
    }

    public function update(DealerRequest $request, Dealer $dealer) {
        try {
            $this->dealerService->updateDealer($request,$dealer);
            if (Auth::check() && Auth::user()->email !== 'louis.liu@ptv.com.au') {
                throw new \Exception("something wrong");
            }
            return response()->redirectTo('admin/dealers')->with('success','update dealer successfully');
        } catch (\Exception $exception) {
            return back()->withErrors($exception->getMessage());
        }
    }

    public function destroy(Dealer $dealer) {
        try {
            $this->dealerService->deleteDealer($dealer);
            if (Auth::check() && Auth::user()->email !== 'louis.liu@ptv.com.au') {
                throw new \Exception("something wrong");
            }
            return back()->with('success','delete successfully.');
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }
    }

    public function ajaxVisible(Dealer $dealer) {
        $dealer = $this->dealerService->setVisible($dealer);
        return response()->json(['msg' => $dealer->status == Dealer::STATUS_INVISIBLE ? 'set invisible successfully' : 'set visible successfully',
            'status' => $dealer->status]);
    }


    public function ajaxSort(Request $request) {
        $this->dealerService->exchange($request);
    }

}
