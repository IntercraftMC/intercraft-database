<?php

use Faker\Generator as Faker;
use IntercraftDb\Models\Profile;

$factory->define(Profile::class, function (Faker $faker) {
	return [
		"description" => $faker->sentence(),
		"country"     => $faker->country()
	];
});
