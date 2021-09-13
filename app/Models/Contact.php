<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public const TYPE_CONTACT = 0;
    public const TYPE_WARRANTY = 1;
    public const TYPE_PRODUCT_REVIEW = 2;
    public const TYPE_CUSTOMER = 3;

    protected $fillable = [
        'name',
        'type',
        'company',
        'phone',
        'email',
        'address',
        'purchase_at',
        'installer_info',
        'purchase_location',
        'model_number',
        'sku_number',
        'product_name',
        'age_group',
        'occupation',
        'reasons',
        'way_to_hear',
        'travel_frequency',
        'message',
        'entity_id',
        'username',
        'reply',
        'replyUserId'
    ];

    public function setReasonsAttribute($value)
    {
        $this->attributes['reasons'] = implode(",", $value);
    }

    public function setWayToHearAttribute($value)
    {
        $this->attributes['way_to_hear'] = implode(",", $value);
    }

    public function scopeContacts($query) {
        return $query->where("type", self::TYPE_CONTACT);
    }

    public function scopeWarranties($query) {
        return $query->where("type", self::TYPE_WARRANTY);
    }

    public function scopeProductReviews($query) {
        return $query->where("type", self::TYPE_PRODUCT_REVIEW);
    }

    public function scopeCustomers($query) {
        return $query->where("type", self::TYPE_CUSTOMER);
    }


    public function getFirstName() {
        $nameArray = explode(" ", $this->name);
        return $nameArray && $nameArray.size() > 0 ?  $nameArray[0] : "";
    }

    public function getLastName() {
        $nameArray = explode(" ", $this->name);
        return $nameArray && $nameArray.size() > 2 ?  $nameArray[1] : "";
    }
}
