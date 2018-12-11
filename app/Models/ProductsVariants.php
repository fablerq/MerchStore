<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductsVariants extends Model
{
    protected $fillable = [
        'product_id', 'size_id', 'color_id', 'order_id'
    ];

    public function product() {
        return $this->belongsTo('App\Models\Product');
    }

    public function size() {
        return $this->belongsTo('App\Models\Size');
    }

    public function color() {
        return $this->belongsTo('App\Models\Color');
    }

    public function order() {
        return $this->belongsTo('App\Models\Order');
    }
}
