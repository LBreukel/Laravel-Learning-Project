<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Craftingitem;
use Faker\Generator as Faker;

$factory->define(Craftingitem::class, function (Faker $faker) {
    return [
        //
        'name'=> $faker->name,
        'attribute'=> $faker->paragraph(200),
        'category'=> $faker->text(5),
        'guidenumber'=> $faker->text(5),
        'type_id'=> $faker->text(5),
        'created_at'=> $faker->dateTimeThisDecade('now', null),
        'updated_at'=> $faker->dateTimeThisDecade('now', null)
    ];
});
