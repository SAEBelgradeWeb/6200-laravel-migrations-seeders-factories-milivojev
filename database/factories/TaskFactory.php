<?php



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


$factory->define(App\Task::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->randomDigit(1,46),
        'title' => $faker->sentence(4,true),
        'body' => $faker->realText(400,2), // secret
        'completed' => $faker->boolean(),
        'due_date'=> $faker->dateTimeBetween('0 years','1 year')

    ];
});
