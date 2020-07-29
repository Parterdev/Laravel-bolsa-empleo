

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Course;
use Faker\Generator as Faker;





$factory->define(Course::class, function (Faker  $faker) {
    return [
        'event_type' => $faker->text(rand(32, 10)),
        'institution' => $faker->text(rand(32, 10)),
        'event_name' => $faker->text(rand(32, 10)),
        'start_date' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
        'finish_date' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
        'hours' => $faker->text(rand(32, 10)),
        'type_certification' => $faker->text(rand(32, 10)),
        'professional_id' => function () {
            return factory(App\Models\Professional::class)->create()->id;
        }
    ];
});