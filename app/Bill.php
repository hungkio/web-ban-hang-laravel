<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
  protected $table = 'bills';
  protected $fillable = [
    'Bill_date',  'guest_id',  'products_id',  'products_name',  'sales',  'total_bill',
  ];
}
