<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

// factory(App\Employee::class, 20)->create();
$factory->define(Employee::class, function (Faker $faker) {
    return [
        'nip' => $faker->numerify('##################'),
        'nama' => $faker->name,
    ];
});
