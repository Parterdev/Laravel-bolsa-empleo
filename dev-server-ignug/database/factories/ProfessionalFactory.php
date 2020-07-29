<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Professional;
use Faker\Generator as Faker;






$factory->define(Professional::class, function (Faker $faker) {
    return [
        'identity' => $faker->randomDigit ,
        'first_name' => $faker->name,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'nationality' => $faker->city,
        'civil_state' => $faker->cityPrefix,
        'birthdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'gender' =>random_int(31, 38),
        'phone' => $faker->tollFreePhoneNumber,
        'address' => $faker->address ,
        'state' => $faker->state ,
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});