<?php

namespace IntercraftDb\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	const CREATED_AT = Null;

	/**
	 * Fetch the user that this profile belongs to
	 *
	 * @return IntercraftDb\Models\User
	 */
	public function user()
	{
		return $this->belongsTo("IntercraftDb\\Models\\User");
	}
}
