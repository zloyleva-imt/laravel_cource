<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Tag;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Tag::class, function (Faker $faker) {
    $name = join(' ',$faker->words($faker->numberBetween(1,3)));
    return [
        'name' => $name,
        'slug' => Str::slug($name),
    ];
});
