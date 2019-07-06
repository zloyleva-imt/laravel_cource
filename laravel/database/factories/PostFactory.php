<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence();
    $status = ['published', 'pending', 'hidden'];
    return [
        'title' => $title,
        'slug' => Str::slug($title),
        'body' => $faker->paragraph(),
        'user_id' => $faker->numberBetween(1,5),
        'status' => $status[$faker->numberBetween(0,count($status)-1)],
    ];
});
