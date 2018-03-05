<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
      'user_id' => '1',
      'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
      'body' => $faker->realText($maxNbChars = 200, $indexSize = 2),
      'link' => 'https://www.aljazeera.com/news/2018/03/rebels-retreat-syria-eastern-ghouta-thousands-flee-180304202021420.html',
      'image' => $faker->imageUrl($width = 640, $height = 480, 'business'),
    ];
});
