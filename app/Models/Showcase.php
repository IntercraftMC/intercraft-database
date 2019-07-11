<?php

namespace IntercraftDb\Models;

use Illuminate\Database\Eloquent\Model;

class Showcase extends Model
{
	/**
	 * Fetch the items that belong to this showcase
	 *
	 * @return IntercraftDb\Models\ShowcaseItem
	 */
	public function items()
	{
		return $this->hasMany("IntercraftDb\\Models\\ShowcaseItem");
	}
}
