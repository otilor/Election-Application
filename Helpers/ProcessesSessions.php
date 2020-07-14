<?php

namespace Helpers;

use App\Session;

trait ProcessesSessions {

	public static function getSessionDetails($session_id)
	{
		return Session::find($session_id);
	}
}
