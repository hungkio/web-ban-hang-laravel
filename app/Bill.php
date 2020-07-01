<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
  protected $table = 'bills';
  protected $fillable = [
    'guest_id',  'products_list',  'products_name',  'sales',  'total_bill',
  ];
}
