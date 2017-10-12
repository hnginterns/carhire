<?php

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

$factory->define(App\Drivers::class, function (Faker $faker) {
    
    return [
        'dirver_name' => $faker->driverName,
        'driver_password' => $password ?: $password = bcrypt('secret'),
        'phone_number' => $faker->phoneNumber,
        'remember_token' => str_random(10),
    ];
});
