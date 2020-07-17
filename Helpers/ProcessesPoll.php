<?php 

namespace Helpers;

use App\Poll;

trait ProcessesPoll
{
	public static function whatIsTheCurrentPoll()
	{
		return $_GET["poll"];
	}
}
