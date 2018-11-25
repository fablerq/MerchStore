<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function user() {
        return $this->hasOne('App\User');
    }
}
