<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AcademicFormation;
use Faker\Generator as Faker;




$factory->define(AcademicFormation::class, function (Faker $faker) {
    return [
        'institution' => $faker->text(rand(32, 10)),
        'career' => $faker->text(rand(32, 10)),
        'professional_degree' => $faker->text(rand(32, 10)),
        'registration_date' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
        'senescyt_code' => $faker->text(rand(32, 10)),
        'professional_id' => function () {
            return factory(App\Models\Professional::class)->create()->id;
        }
    ];
});