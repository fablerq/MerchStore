<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public function productsvariants()
    {
        return $this->hasMany('App\Models\ProductsVariants');
    }

    protected $fillable = [
        'title', 'description',
    ];

    public $timestamps = false;
}
