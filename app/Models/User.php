<?php

namespace IntercraftDb\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	/**
	 * Fetch the items that belong to this user
	 *
	 * @return IntercraftDb\Models\Profile
	 */
	public function profile()
	{
		return $this->hasOne("IntercraftDb\\Models\\Profile");
	}

	/**
	 * Fetch the Minecraft accounts that belong to this user
	 *
	 * @return IntercraftDb\Models\MinecraftAccount
	 */
	public function minecraftAccounts()
	{
		return $this->hasMany("IntercraftDb\\Models\MinecraftAccount");
	}
}
