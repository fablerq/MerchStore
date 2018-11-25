<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'quantity', 'status', 'price', 'thumbnail', 'faculty_id', 'type_id'
    ];

    public $timestamps = false;
    
    public function faculty() {
        return $this->belongsTo('App\Models\Faculty');
    }

    public function type() {
        return $this->belongsTo('App\Models\Type');
    }

    public function order() {
        return $this->hasOne('App\Models\Order');
    }

    public function photo() {
        return $this->belongsTo('App\Models\Photo');
    }
}
