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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Core\Common\Address::class, function(Faker\Generator $faker) {
    return [
        'street' => $faker->streetAddress,
        'city' => $faker->city,
        'postalCode' => $faker->numerify('##-###')
    ];
});

$factory->define(App\Core\Company\Company::class, function(Faker\Generator $faker) {
    return [
        'name' => $faker->company,
        'NIP' => $faker->numerify('#########'),
        'address_id' => factory(App\Core\Common\Address::class)->create()->id
    ];
});
