<?php

use Faker\Generator as faker;
use IntercraftDb\Models\ShowcaseItem;

$factory->define(ShowcaseItem::class, function (Faker $faker) {
	return [
		"description" => $faker->sentence()
	];
});
