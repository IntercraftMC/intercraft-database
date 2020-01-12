<?php

use Faker\Generator as Faker;
use IntercraftDb\Models\User;

$factory->define(User::class, function (Faker $faker) {
	return [
		"is_admin"   => False,
		"privileges" => 0,
		"email"      => $faker->name(),
		"username"   => $faker->userName(16),
		"password"   => "test"
	];
});
