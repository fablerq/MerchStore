<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function product() {
        return $this->hasOne('App\Models\Product');
    }

    public function size() {
        return $this->hasOne('App\Models\Size');
    }
}
