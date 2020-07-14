<?php
namespace Helpers;

trait FetchesContestantsDetails {
	

	public function fetch($position_id)
	{
		return \App\Contestant::where('vying_for', $position_id)->get();
	}

	public static function greet()
	{
		dd("Hey");
	}
}
