<?php
namespace App\Helpers;

trait FetchContestantsDetails {
	

	public function fetch($position_id)
	{
		return \App\Contestant::where('vying_for', $position_id)->get();
	}
}
