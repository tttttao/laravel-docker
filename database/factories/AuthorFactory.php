<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Author::class, function (Faker $faker) {
    return [
        'id' => Str::uuid(),
        'slug' => $faker->unique()->slug,
        'name' => $faker->unique()->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$r9vjpdhtyvdWs3RmSDVu/emA5RBc8Ph4kutOOJE3zZoG4QZ...Ie6',
        'bio' => 'This is me.',
    ];
});
