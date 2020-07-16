<?php

declare(strict_types = 1);

namespace App;

use Illuminate\Database\Eloquent\Model;


class Position extends Model
{
   public static function getPositionDetails($token)
	{
		return  self::where('token', $token)->first();
	}
}
