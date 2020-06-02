<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(10),
        'description' => $faker->sentence,
        'markdown' => $faker->text,
        'slug' => $faker->unique()->word,
        'public' => true,
        'user_id' => factory(\App\User::class),
    ];
});
