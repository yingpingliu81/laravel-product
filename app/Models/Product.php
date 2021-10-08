<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public const STATUS_VISIBLE = 0;
    public const STATUS_INVISIBLE = 1;

    protected $table = "product";

    protected $fillable = [
        "title",
        "sku",
        "slug",
        "price",
        "thumb",
        "software",
        "status",
        "images",
        "content",
        "intro",
        "description",
        "feature",
        "specification",
        "package",
        "downloads",
        "videos",
        "sort"
    ];

    protected $casts = [
        'images' => 'array',
        'downloads' => 'array',
        'videos' => 'array',
        'software' => 'array',
    ];

    public function setImagesAttribute($value) {
        $this->attributes['images'] = json_encode(json_decode($value), true);
    }
    public function setDownloadsAttribute($value) {
        $this->attributes['downloads'] = json_encode(json_decode($value), true);
    }
    public function setVideosAttribute($value) {
        $this->attributes['videos'] = json_encode(json_decode($value), true);
    }
    public function setSoftwareAttribute($value) {
        $this->attributes['software'] = json_encode(json_decode($value), true);
    }

    public function cates() {
        return $this->belongsToMany(Cate::class,'product_cate','product_id','cate_id')->withTimestamps();
    }


    public function scopeActive($query) {
        return $query->whereIn("status", [self::STATUS_VISIBLE,self::STATUS_INVISIBLE]);
    }

    public function scopeVisible($query) {
        return $query->where("status", self::STATUS_VISIBLE);
    }

    public function scopePriority($query) {
        return $query->orderBy('sort','desc');
    }

}
