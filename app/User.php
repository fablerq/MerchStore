<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'login', 'email', 'password', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token', 'email_verified_at',
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    public function order()
    {
        return $this->hasMany('App\Models\Order');
    }

    public function comment()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function faq()
    {
        return $this->hasMany('App\Models\FAQ');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'product_user')
        ->withPivot('id');
    }
}
