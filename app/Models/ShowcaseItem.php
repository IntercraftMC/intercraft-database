<?php

namespace IntercraftDb\Models;

use Illuminate\Database\Eloquent\Model;

class ShowcaseItem extends Model
{
	/**
	 * Fetch the showcase that this item belongs to
	 *
	 * @return IntercraftDb\Models\Showcase
	 */
	public function showcase()
	{
		return $this->belongsTo("IntercraftDb\\Models\\Showcase");
	}
}
