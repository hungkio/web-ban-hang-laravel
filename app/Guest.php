<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    const GENDER = [
        1 => 'male',
        2 => 'female'
    ];

    const GENDER_CODE = [
        'male' => 1,
        'female' => 2
    ];

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

    protected $table = 'guests';
    protected $fillable = [
        'name',  'sex',  'age',  'phonenumber',  'email',  'address',  'sale_rank'
    ];
}
