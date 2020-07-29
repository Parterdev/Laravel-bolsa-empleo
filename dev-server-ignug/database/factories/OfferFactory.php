<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Offer;
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
$factory->define(Offer::class, function (Faker $faker) {
    return [
        'code' => $faker->randomDigit,
        'contact' => $faker->phoneNumber ,
        'email' => $faker->email,
        'phone' => $faker->e164PhoneNumber,
        'cell_phone' => $faker->tollFreePhoneNumber,
        'contract_type' => $faker->text(rand(32, 10)),
        'position' => $faker->text(rand(32, 10)),
        'broad_field' => 'EDUCACIÓN',
        'specific_field' => 'ASISTENTE PEDAGÓGICO CON NIVEL EQUIVALENTE A TECNÓLOGO SUPERIOR',
        'training_hours' => $faker->text(rand(32, 10)),
        'remuneration' => $faker->text(rand(32, 10)),
        'working_day' => $faker->text(rand(32, 10)),
        'number_jobs' => $faker->text(rand(32, 10)),
        'experience_time' => $faker->text(rand(32, 10)),
        'activities' => $faker->text(rand(400, 300)),
        'start_date' => $faker->dateTimeThisMonth()->format('Y-m-d'),
        'finish_date' => $faker->dateTimeThisMonth()->format('Y-m-d'),
        'aditional_information' => $faker->text(rand(400, 300)),
        'province' => $faker->citySuffix ,
        'city' => $faker->city ,
        'state' => 'ACTIVE',
        'company_id' => function () {
            return factory(App\Models\Company::class)->create()->id;
        }
    ];
});
