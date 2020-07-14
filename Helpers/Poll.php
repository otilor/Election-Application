<?php 


class Poll 
{
	public function whatIsTheCurrentPoll()
	{
		$currentPoll = $_GET["poll"];
		return $currentPoll;
	}
}
