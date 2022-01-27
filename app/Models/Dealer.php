<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    public const TYPE_DEALER = 0;
    public const TYPE_INSTALLER = 1;
    public const TYPE_BATTER_DEALER = 2;
    public const STATUS_VISIBLE = 1;
    public const STATUS_INVISIBLE = 0;

    protected $fillable = [
        'name',
        'address',
        'type',
        'phone',
        'fax',
        'mobile',
        'email',
        'website',
        'lat',
        'lng',
        'suburb',
        'state',
        'status',
        'note',
    ];

    public function getCommonType() {
        $types = json_decode(config('app.dealer_types'), true);
        return $types[$this->type];
    }

    public function scopePriority($query) {
        return $query->orderBy('sort','desc');
    }

    public function scopeVisible($query) {
        return $query->where('status', self::STATUS_VISIBLE);
    }

    public function scopeDealers($query) {
        return $query->where("type", self::TYPE_DEALER);
    }

    public function scopeInstallers($query) {
        return $query->where("type", self::TYPE_INSTALLER);
    }

    public function scopeBatterDealers($query) {
        return $query->where("type", self::TYPE_BATTER_DEALER);
    }

    public function getFullStateAttribute() {
        $states = [
            'VIC' => 'Victoria',
            'ACT' => 'Australian Capital Territory',
            'NSW' => 'New South Wales',
            'QLD' => 'Queensland',
            'WA' => 'Western Australia',
            'SA' => 'South Australia',
            'TAS' => 'Tasmania',
            'NT' => 'Northern Territory'
        ];
        return $states[$this->state];
    }

    public function getFullStateSlugAttribute() {
        $states = [
            'VIC' => 'victoria',
            'ACT' => 'australian-capital-territory',
            'NSW' => 'new-south-wales',
            'QLD' => 'queensland',
            'WA' => 'western-australia',
            'SA' => 'south-australia',
            'TAS' => 'tasmania',
            'NT' => 'northern-territory'
        ];
        return $states[$this->state];
    }

    public function getShortAddressAttribute() {
        return str_replace(', Australia', '', $this->address);
    }

}
