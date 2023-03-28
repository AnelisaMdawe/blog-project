<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'slug' => $this->faker->slug,
        'excerpt' => $faker->text,
        'body' => $faker->text,
        'published_at' => $faker->dateTime,
    ];
});
