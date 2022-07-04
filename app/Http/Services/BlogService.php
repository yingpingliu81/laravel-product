<?php


namespace App\Http\Services;

use App\Http\Requests\BlogRequest;
use App\Imports\NewsImport;
use App\Models\Blog;
use Illuminate\Database\QueryException;
use Maatwebsite\Excel\Facades\Excel;

class BlogService
{

    const SORT_STEP = 10;

    public function createBlog($request) {
        try {
            $blog = Blog::create($request->except('_method'));
            $blog->sort = $this->getNewSortNumber();
            $blog->save();
            $blog->forgetCache();
            return $blog;
        } catch (QueryException $e) {
            throw $e;
        }
    }

    public function getDefaultBlogsList() {
        return Blog::blogs()->priority()->get();
    }

    public function getDefaultNewsList() {
        return Blog::news()->priority()->get();
    }

    public function getDefaultFaqsList() {
        return Blog::faqs()->priority()->get();
    }


    public function deleteBlog($blog) {
        try {
            $blog->forgetCache();
            $blog->delete();
        } catch (\Exception $e) {
            throw  $e;
        }
    }

    public function updateBlog(BlogRequest $request,$blog) {
        try {
            $blog->update($request->except('_method'));
            $blog->save();
            $blog->forgetCache();
        } catch (QueryException $e) {
            throw $e;
        }
    }

    public function setVisible(Blog $blog) {
        $blog->is_active = $blog->is_active === Blog::STATUS_INVISIBLE ? Blog::STATUS_VISIBLE : Blog::STATUS_INVISIBLE;
        $blog->save();
        $blog->forgetCache();
        return $blog;
    }

    public function exchange($request) {
        if($request->source || $request->dest) {
            $source = Blog::find($request->source);
            $dest = Blog::find($request->dest);
            $temp = $source->sort;
            $source->sort = $dest->sort;
            $dest->sort = $temp;
            $source->save();
            $dest->save();
            $dest->forgetCache();
        }
    }


    private function getNewSortNumber() {
        return Blog::max('sort') + self::SORT_STEP;
    }

    public function import($request) {
        try {
            $file = $request->file('import');
            $file->move(public_path('laravel-excel'), $file->getClientOriginalName());
            $filePath = public_path('laravel-excel/').$file->getClientOriginalName();
            Excel::import(new NewsImport, $filePath);
            unlink($filePath);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function importFaq($request) {
        try {
            $file = $request->file('import');
            $file->move(public_path('laravel-excel'), $file->getClientOriginalName());
            $filePath = public_path('laravel-excel/').$file->getClientOriginalName();
            Excel::import(new NewsImport, $filePath);
            unlink($filePath);
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
