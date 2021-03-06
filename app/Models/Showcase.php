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

	/**
	 * Get a path to the image name
	 *
	 * @return string
	 */
	public function imagePath()
	{
		$item = $this->items->first();
		return $item ? $item->imagePath() : Null;
	}

	/**
	 * Convert the model instance to an array
	 *
	 * @return array
	 */
	public function attributesToArray()
	{
		$response = parent::attributesToArray();
		$response["image"] = $this->imagePath();
		return $response;
	}
}
