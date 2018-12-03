<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function user() {
        return $this->hasOne('App\User');
    }

    protected $fillable = [
        'title'
    ];

    public $timestamps = false;
}
