<?php

use App\Post;
use App\Author;
use App\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Tag::class, 10)->create();
        factory(Author::class, 50)->create()->each(function ($user) {
            $tags = Tag::all('id');
            $post = $user->posts()->save(factory(Post::class)->make());

            $tag = $tags[rand(0, count($tags) - 1)];
            $post->tags()->attach($tag);
        });
    }
}
