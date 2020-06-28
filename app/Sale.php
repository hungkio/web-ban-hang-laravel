<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
  protected $table = 'sales';
  protected $fillable = [
    'sale_product_type',  'sale_product_name',  'sale_begin',  'sale_end',  'sale_rank'
  ];
}
