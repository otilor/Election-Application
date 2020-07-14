<?php 

namespace Helpers;

trait ProcessesPoll
{
	public static function whatIsTheCurrentPoll()
	{
		return $_GET["poll"];
	}
}
