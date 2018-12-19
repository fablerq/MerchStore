<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'productsvariants_id', 'user_id', 'status_id', 'paymentmethod_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function productsvariants()
    {
        return $this->hasMany('App\Models\ProductsVariants');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status');
    }

    public function paymentmethod()
    {
        return $this->belongsTo('App\Models\PaymentMethod');
    }
}
