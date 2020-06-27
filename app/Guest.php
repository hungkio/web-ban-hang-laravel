<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
  protected $table = 'guests';
  protected $fillable = [
    'name',  'sex',  'age',  'phonenumber',  'email',  'address',  'sale_rank'
  ];
}
