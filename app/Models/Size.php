<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public function type() {
        return $this->belongsTo('App\Models\Type');
    }
}
