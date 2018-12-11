<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'description', 'price', 'faculty_id', 'type_id'
    ];

    public $timestamps = false;
    
    public function faculty() {
        return $this->belongsTo('App\Models\Faculty');
    }

    public function type() {
        return $this->belongsTo('App\Models\Type');
    }

    public function productsvariants() {
        return $this->hasMany('App\Models\ProductsVariants');
    }

    public function comment() {
        return $this->hasMany('App\Models\Comments');
    }

    public function photo() {
        return $this->hasMany('App\Models\Photo');
    }

    public function users() {
        return $this->belongsToMany('App\User', 'product_user')
        ->withPivot('id');
    }
}
