<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Club\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=>$faker->title,
        'content'=>$faker->paragraph,
        'img'=>$faker->imageUrl(),
        'type_id'=>1
    ];
});
