<?php 

namespace Helpers;

trait ProcessesPoll
{
	public static function whatIsTheCurrentPoll()
	{
		return $_GET["poll"];
	}

	public static function find($poll_id)
	{
		return \App\Poll::find($poll_id);
	}
}
