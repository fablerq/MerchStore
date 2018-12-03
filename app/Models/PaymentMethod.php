<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = [
        'title'
    ];

    public $timestamps = false;

    public function order() {
        return $this->hasMany('App\Models\Order');
    }
}
