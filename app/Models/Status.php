<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        'title', 'description'
    ];

    public $timestamps = false;

    public function order() {
        return $this->hasMany('App\Models\Order');
    }
}
