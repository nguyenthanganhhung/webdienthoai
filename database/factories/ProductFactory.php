<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
          	'name' => $faker->name,
            'title' => $faker->text(25),
            'size' => $faker->text(25),
            'memory' => $faker->text(25),
            'weights' => $faker->text(25),
            'color' => $faker->text(25),
            'cpu' => $faker->text(25),
            'ram' => $faker->text(25),
            'screen' => $faker->text(25),
            'battery' => $faker->text(25),
            'bluetooth' => $faker->text(25),
            'camera_primary' => $faker->text(25),
            'camera_secondary' => $faker->text(25),
            'promotion_price' => rand(1, 100) * 1000,
            'image' => $faker->text(255),
            'status' => '1',
            'quantity' => rand(1,500),
            'description' => $faker->text(255),
            'price' => rand(1, 100) * 10000,
        	'category_id' => $faker->numberBetween(1, 3), 
        	'created_at' => new DateTime,
        	'updated_at' => new DateTime,

    ];
});
