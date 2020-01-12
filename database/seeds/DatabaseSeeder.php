<?php

use Illuminate\Database\Seeder;

use IntercraftDb\Models\MinecraftAccount;
use IntercraftDb\Models\Profile;
use IntercraftDb\Models\Showcase;
use IntercraftDb\Models\ShowcaseItem;
use IntercraftDb\Models\User;

class DatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds
	 *
	 * @return void
	 */
	public function run()
	{
		factory(User::class, 24)->create()->each(function ($user) {
			$accounts = factory(MinecraftAccount::class, 1)->make([
				"display_name" => "SirDavidLudwig",
				"uuid"        => "b50cffd9ee8949b9b1223f1da79b2080"
			]);
			$user->minecraftAccounts()->saveMany($accounts);
			$user->profile()->save(factory(Profile::class)->make([
				"minecraft_account_id" => $accounts[0]->id
			]));
		});
		factory(Showcase::class, 12)->create()->each(function ($showcase) {
			$showcase->items()->saveMany(factory(ShowcaseItem::class, 15)->make());
		});
	}
}
