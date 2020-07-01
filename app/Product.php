<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'product_name',  'product_counts',  'products_type',  'product_in_prices',  'product_out_prices','product_image'
    ];
}
