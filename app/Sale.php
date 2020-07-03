<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
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

    protected $table = 'sales';
    protected $fillable = [
        'sale_product_type',  'sale_percent',  'sale_begin',  'sale_end',
    ];
}
