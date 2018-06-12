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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Menu::class, function(Faker\Generator $faker) {

	return [	
        'created_at' => $faker->dateTimeThisDecade,
        'updated_at' => $faker->dateTimeThisDecade,
		'titulo' => $faker->realText(random_int(10, 20)),
		'image' => "image/plato.jpg",
	];

});

$factory->define(App\Plato::class, function(Faker\Generator $faker) {

    return [      
        'titulo' => $faker->realText(random_int(10, 20)),
        'descripcion' => $faker->realText(random_int(20, 160)),
        'precio' => 10,
        'imagen' => $faker->imageUrl("image/plato.jpg"),
    ];

});