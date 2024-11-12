<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\BlogRequest;
use App\Http\Services\BlogService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BlogController extends Controller
{
    private $blogService;
    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }

    public function index() {
        $blogs = $this->blogService->getDefaultBlogsList();
        return view('admin.blogs.index',compact('blogs'));
    }

    public function create() {
        return view('admin.blogs.create');
    }

    public function store(BlogRequest $request) {
        try {
            $request->request->add(['type' => Blog::TYPE_BLOG]);
            $this->blogService->createBlog($request);
            if (Auth::check() && Auth::user()->email !== 'louis.liu@ptv.com.au') {
                throw new \Exception("something wrong");
            }
            return response()->redirectTo('admin/blogs')->with('success','create blog successfully');
        } catch (\Exception $exception) {
            return back()->withErrors($exception->getMessage());
        }
    }

    public function edit(Blog $blog) {
       return view('admin.blogs.edit',compact('blog'));
    }

    public function update(BlogRequest $request, Blog $blog) {
        try {
            $this->blogService->updateBlog($request,$blog);
            if (Auth::check() && Auth::user()->email !== 'louis.liu@ptv.com.au') {
                throw new \Exception("something wrong");
            }
            return response()->redirectTo('admin/blogs')->with('success','update blog successfully');
        } catch (\Exception $exception) {
            return back()->withErrors($exception->getMessage());
        }
    }

    public function destroy(Blog $blog) {
        try {
            $this->blogService->deleteBlog($blog);
            if (Auth::check() && Auth::user()->email !== 'louis.liu@ptv.com.au') {
                throw new \Exception("something wrong");
            }
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



}
