<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

/**
 * go to terminal
 * php artisan tinker
 * factory(App\Models\Post::class,100)->create();
 */
$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),  // Random task title
        'slug' => $faker->slug,  // Random task title
        'content' => $faker->text(), // Random task description
        'created_at' => $faker->dateTime(), // Random task description
        'updated_at' => $faker->dateTime(), // Random task description
    ];
});
