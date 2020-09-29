<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
      'title'    =>    $faker -> word(),
      'text'     =>    $faker -> text($maxNbChars = 200),
      'category' =>    $faker -> word(),
      'like'     =>    $faker -> randomDigit(),
      'dislike'  =>    $faker -> randomDigit()


    ];
});
