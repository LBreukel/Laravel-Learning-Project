<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Material;
use Faker\Generator as Faker;

$factory->define(Material::class, function (Faker $faker) {
    return [
        //
        'name'=> $faker->name,
        'description'=> $faker->paragraph(200),
        'created_at'=> $faker->dateTimeThisDecade('now', null),
        'updated_at'=> $faker->dateTimeThisDecade('now', null)
    ];
});
