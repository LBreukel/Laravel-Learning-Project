<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Gearitem;
use Faker\Generator as Faker;

$factory->define(Gearitem::class, function (Faker $faker) {
    return [
        //
        'name'=> $faker->name,
        'gearstats'=> $faker->text(5),
        'category'=> $faker->text(5),
        'gearset'=> $faker->text(5),
        'attribute'=> $faker->text(5),
        'guidenumber'=> $faker->text(5),
        'created_at'=> $faker->dateTimeThisDecade('now', null),
        'updated_at'=> $faker->dateTimeThisDecade('now', null)
    ];
});
