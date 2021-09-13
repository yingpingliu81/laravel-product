<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\BlogRequest;
use App\Http\Services\BlogService;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    private $blogService;
    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }

    public function index() {
        $faqs = $this->blogService->getDefaultFaqsList();
        return view('admin.faqs.index',compact('faqs'));
    }

    public function create() {
        return view('admin.faqs.create');
    }

    public function store(BlogRequest $request) {
        try {
            $request->request->add(['type' => Blog::TYPE_FAQ]);
            $this->blogService->createBlog($request);
            return response()->redirectTo('admin/faqs')->with('success','create FAQ successfully');
        } catch (\Exception $exception) {
            return back()->withErrors($exception->getMessage());
        }
    }

    public function edit(Blog $blog) {
       return view('admin.faqs.edit',compact('blog'));
    }

    public function update(BlogRequest $request, Blog $blog) {
        try {
            $this->blogService->updateBlog($request,$blog);
            return response()->redirectTo('admin/faqs')->with('success','update FAQ successfully');
        } catch (\Exception $exception) {
            return back()->withErrors($exception->getMessage());
        }
    }

    public function destroy(Blog $blog) {
        try {
            $this->blogService->deleteBlog($blog);
            return back()->with('success','delete successfully.');
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }
    }

    public function ajaxVisible(Blog $blog) {
        $blog = $this->blogService->setVisible($blog);
        return response()->json(['msg' => $blog->is_active === Blog::STATUS_INVISIBLE ? 'set invisible successfully' : 'set visible successfully',
            'status' => $blog->is_active]);
    }


    public function ajaxSort(Request $request) {
        $this->blogService->exchange($request);
    }

    public function importFaq(Request $request) {
        $this->blogService->import($request);
        return back()->with('success','import news successfully');
    }


}
