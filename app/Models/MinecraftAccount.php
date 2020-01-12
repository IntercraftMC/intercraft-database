<?php

namespace IntercraftDb\Models;

use Illuminate\Database\Eloquent\Model;

class MinecraftAccount extends Model
{
	/**
	 * Fetch the user that this Minecraft account belongs to
	 *
	 * @return IntercraftDb\Models\User
	 */
	public function user()
	{
		return $this->belongsTo("IntercraftDb\\Models\\User");
	}
}
