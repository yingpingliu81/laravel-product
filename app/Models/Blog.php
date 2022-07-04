<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Blog extends Model
{
    public const TYPE_NEWS = 0;
    public const TYPE_FAQ = 1;
    public const TYPE_BLOG = 2;
    public const STATUS_VISIBLE = 1;
    public const STATUS_INVISIBLE = 0;


    protected $fillable = [
        'title',
        'slug',
        'type',
        'thumbnail',
        'published_at',
        'is_active',
        'content',
    ];


    public function scopePriority($query) {
        return $query->orderBy('sort','desc');
    }
    public function scopeActive($query) {
        return $query->where('is_active',self::STATUS_VISIBLE);
    }

    public function getPublishDate() {
        return date('d M Y', strtotime($this->published_at));
    }

    public function getPublishFullDate() {
        return date('l, d M Y', strtotime($this->published_at));
    }
    public function getPublishMonth() {
        return date('M', strtotime($this->published_at));
    }

    public function getPublishDay() {
        return date('d', strtotime($this->published_at));
    }

    public function scopeNews($query) {
        return $query->where("type", self::TYPE_NEWS);
    }

    public function scopeFaqs($query) {
        return $query->where("type", self::TYPE_FAQ);
    }

    public function scopeBlogs($query) {
        return $query->where("type", self::TYPE_BLOG);
    }

    public function forgetCache() {
        if(Cache::has("latest_news")) {
            Cache::forget("latest_news");
        }
        if(Cache::has("list_news")) {
            Cache::forget("list_news");
        }
        if(Cache::has("list_blogs")) {
            Cache::forget("list_blogs");
        }
    }
}
