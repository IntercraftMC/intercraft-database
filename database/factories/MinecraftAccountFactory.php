<?php

use Faker\Generator as Faker;
use IntercraftDb\Models\MinecraftAccount;

$factory->define(MinecraftAccount::class, function (Faker $faker) {
	return [
		"display_name" => $faker->userName(16)
	];
});
