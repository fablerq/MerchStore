<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public function product() {
        return $this->hasMany('App\Models\Product');
    }
    
    protected $fillable = [
        'title', 'color'
    ];

    public $timestamps = false;
}
