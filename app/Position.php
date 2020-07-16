<?php

declare(strict_types = 1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
   public static function getPositionDetails($token)
	{
		return Position::where('token', $token)->first();
	}

	public function getAllDetails()
	{
		
	}
}
