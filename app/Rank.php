<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{

	const RANK_CODE = [
        'diamond' => 3,
        'gold' => 2,
        'silver' => 1,
    ];

    const RANK = [
        3 => 'diamond',
        2 => 'gold',
        1 => 'silver',
    ];
  	protected $table = 'ranks';
  	protected $fillable = [
    'rank_name',  'bill_count',  'total_bills'
  	];
}
