<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;
use App\Guest;
$factory->define(App\Rank::class, function (Faker $faker) {
    return [
        'rank_name' => $faker->randomElement($array = array(Guest::RANK_CODE['diamond'],Guest::RANK_CODE['silver'],Guest::RANK_CODE['gold'])),
        'bill_count'=> $faker->biasedNumberBetween(1,20),
        'total_bills'=> $faker->biasedNumberBetween(100,10000),
        'sale_percent'=>$faker->biasedNumberBetween(1,40),
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});

