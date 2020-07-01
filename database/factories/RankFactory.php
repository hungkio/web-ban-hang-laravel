<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;

$factory->define(App\Rank::class, function (Faker $faker) {
    return [
        'rank_name' => $faker->randomElement($array = array('diamond','gold','silver')),
        'bill_count'=> $faker->biasedNumberBetween(1,20),
        'total_bills'=> $faker->biasedNumberBetween(100,10000),
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});

