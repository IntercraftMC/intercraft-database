<?php

use Faker\Generator as Faker;
use IntercraftDb\Models\Showcase;

$factory->define(Showcase::class, function (Faker $faker) {
	return [
		"title" => $faker->name()
	];
});
