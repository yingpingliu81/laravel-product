<?php

namespace App\Http\Controllers;

use App\Models\Cate;
use App\Http\Requests\CateRequest;
use App\Http\Services\CateService;
use Illuminate\Http\Request;

class CateController extends Controller
{
    private $cateService;
    public function __construct(CateService $cateService)
    {
        $this->cateService = $cateService;
    }

    public function index() {
        $cates = $this->cateService->getDefaultCatesList();
        return view('admin.cates.index',compact('cates'));
    }

    public function create() {
        $types = json_decode(config("app.product_cate_slog_group"), true);
        return view('admin.cates.create',compact('types'));
    }

    public function store(CateRequest $request) {
        try {
            $this->cateService->createCate($request->toArray());
            return response()->redirectTo('admin/cates')->with('success','create category successfully');
        } catch (\Exception $exception) {
            return back()->withErrors($exception->getMessage());
        }
    }

    public function edit(Cate $cate) {
        $types = json_decode(config("app.product_cate_slog_group"), true);
       return view('admin.cates.edit',compact('cate','types'));
    }

    public function update(CateRequest $request, Cate $cate) {
        try {
            $this->cateService->updateCate($request->toArray(),$cate);
            return response()->redirectTo('admin/cates')->with('success','update cate successfully');
        } catch (\Exception $exception) {
            return back()->withErrors($exception->getMessage());
        }
    }

    public function destroy(Cate $cate) {
        try {
            $this->cateService->deleteCate($cate);
            return back()->with('success','delete successfully.');
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }
    }

    public function ajaxSort(Request $request) {
        $this->cateService->exchangePosition($request);
    }

    public function updateType(CateType $cateType, Request $request) {
        $cateType->name = $request->name;
        $cateType->save();
    }

    public function deleteType(CateType $cateType) {
        $cateType->delete();
    }
    public function addType(Request $request) {
        $cate = CateType::create([
            'name' => trim($request->name)
        ]);
        return response()->json($cate);
    }
}
