<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Task;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'title'=> $faker->sentence(3),
        'description'=>$faker->text(100),
        'completed'=>false
    ];
});
