<?php

use Faker\Generator as Faker;


$factory->define(App\Post::class, function (Faker $faker) {
    foreach (range(1,5) as $index) {
    return [
      'user_id' => '1',
      'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
      'body' => $faker->realText($maxNbChars = 200, $indexSize = 2),
      'link' => 'https://www.aljazeera.com/news/2018/03/rebels-retreat-syria-eastern-ghouta-thousands-flee-180304202021420.html. $i .',
      'image' => 'https://picsum.photos/3000/2000/?random',
    ];
   }
});
