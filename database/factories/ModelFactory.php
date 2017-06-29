<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'nombre' => $faker->name,
        'correo' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'codigo' => $faker->randomNumber(6),
        'rol' => 'Prestador',
        'carrera_id' => $faker->numberBetween(1, 3),
        'remember_token' => '',
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});

$factory->defineAs(App\User::class, 'admin', function ($faker) use ($factory) {
    $user = $factory->raw(App\User::class);
    return array_merge($user, ['rol' => 'Admin']);
});
