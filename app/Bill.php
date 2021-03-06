<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
  protected $table = 'bills';
  protected $fillable = [
    'guest_id',  'products_list',  'sales',  'total_bill',
  ];
}
