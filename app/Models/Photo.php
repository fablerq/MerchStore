<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'title', 'photo_link', 'product_id'
    ];

    public function product() {
        return $this->belongsTo('App\Models\Product');
    }

    public $timestamps = false;
}
