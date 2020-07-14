<?php 

namespace Helpers;

use App\Poll;

trait ProcessesPoll
{
	public static function whatIsTheCurrentPoll()
	{
		return $_GET["poll"];
	}

	public static function getPollDetails($poll_id)
	{
		return Poll::find($poll_id);
	}
}
