<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function product() {
        return $this->hasOne('App\Models\Product');
    }

    protected $fillable = [
        'title'
    ];

    public $timestamps = false;
}
