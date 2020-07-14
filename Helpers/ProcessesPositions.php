<?php

namespace Helpers;

use App\Position;

trait ProcessesPositions {

	public static function getPositionDetails($token)
	{
		return Position::where('token', $token)->first();
	}
}
