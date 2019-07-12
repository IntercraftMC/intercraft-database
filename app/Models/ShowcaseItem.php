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
	 * Get a reference to the thumbnail
	 *
	 * @return string
	 */
	public function thumbnail()
	{
		return "/img/showcase/{$this->showcase_id}/{$this->id}_thumb.png";
	}

	/**
	 * Get a reference to the full size image
	 *
	 * @return string
	 */
	public function image()
	{
		return "/img/showcase/{$this->showcase_id}/{$this->id}.png";
	}
}
