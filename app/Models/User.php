<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public const PERMISSION_ADMIN = 2;
    public const PERMISSION_EMPLOYEE = 1;
    public const PERMISSION_CUSTOMER = 0;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeAdmins($query) {
        return $query->where("permission", self::PERMISSION_ADMIN);
    }

    public function scopeEmployees($query) {
        return $query->where("permission", self::PERMISSION_EMPLOYEE);
    }

    public function isAdministrator() {
        if(in_array($this->permission, [self::PERMISSION_ADMIN, self::PERMISSION_EMPLOYEE])) return true;
        return false;
    }

    public function scopeCustomers($query) {
        return $query->where("permission", self::PERMISSION_CUSTOMER);
    }
}
