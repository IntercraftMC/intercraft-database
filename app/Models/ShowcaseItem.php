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

	/**
	 * Get a path to the image name
	 *
	 * @return string
	 */
	public function imagePath()
	{
		return "/img/showcase/{$this->showcase_id}/{$this->id}";
	}
}
