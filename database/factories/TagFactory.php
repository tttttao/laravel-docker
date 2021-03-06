<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tag;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Tag::class, function (Faker $faker) {
    return [
        'id' => Str::uuid(),
        'slug' => $faker->unique()->slug,
        'name' => $faker->unique()->word,
    ];
});
