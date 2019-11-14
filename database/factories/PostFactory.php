<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use App\Post;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'id' => Str::uuid(),
        'slug' => $faker->unique()->slug,
        'excerpt' => '',
        'featured_image_caption' => '',
        'title' => $faker->title,
        'body' => $faker->realText(),
        'published' => 1,
        'publish_date' => Carbon::now(),
        'author_id' => factory(Author::class),
        'meta' => '{"meta_description":null,"opengraph_title":null,"opengraph_description":null,"opengraph_image":null,"opengraph_image_width":null,"opengraph_image_height":null,"twitter_title":null,"twitter_description":null,"twitter_image":null}',
    ];
});
