<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;
use App\Guest;

$factory->define(App\Guest::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'phonenumber' => $faker->phoneNumber,
        'sex' => $faker->biasedNumberBetween(Guest::GENDER_CODE['male'],Guest::GENDER_CODE['female']),
        'email' => $faker->unique()->safeEmail,
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
        'age'=>$faker->biasedNumberBetween(20,39),
        'sale_rank'=>$faker->biasedNumberBetween(1,3),
    ];
});
