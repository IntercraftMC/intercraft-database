<?php

use Illuminate\Database\Seeder;

use IntercraftDb\Models\Showcase;
use IntercraftDb\Models\ShowcaseItem;

class DatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds
	 *
	 * @return void
	 */
	public function run()
	{
		factory(Showcase::class, 12)->create()->each(function ($showcase) {
			$showcase->items()->saveMany(factory(ShowcaseItem::class, 15)->make());
		});
	}
}
