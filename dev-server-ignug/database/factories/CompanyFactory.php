<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Company;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Company::class, function (Faker $faker) {
    return [
        'identity' => $faker->randomDigit ,
        'nature' => $faker->userName ,
        'trade_name' => $faker->titleMale,
        'email' => $faker->email ,
        'comercial_activity' => $faker->companySuffix,
        'phone' => $faker->phoneNumber,
        'cell_phone' => $faker->tollFreePhoneNumber,
        'address' => $faker->address,
        'state' => 'ACTIVE',
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});