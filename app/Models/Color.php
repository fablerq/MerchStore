<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    public function productsvariants()
    {
        return $this->hasMany('App\Models\ProductsVariants');
    }

    protected $fillable = [
        'title',
    ];

    public $timestamps = false;
}
