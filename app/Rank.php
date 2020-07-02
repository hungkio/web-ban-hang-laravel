<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{

  	protected $table = 'ranks';
  	protected $fillable = [
    'rank_name',  'bill_count','sale_percent',  'total_bills'
  	];

}
