<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{

    const RANK_CODE = [
        'diamon' => 3,
        'gold' => 2,
        'silver' => 1,
    ];

    const RANK = [
        3 => 'diamon',
        2 => 'gold',
        1 => 'silver',
    ];
    protected $table = 'ranks';
    protected $fillable = [
        'rank_code',  'bill_count','sale_percent',  'total_bills'
    ];

}
