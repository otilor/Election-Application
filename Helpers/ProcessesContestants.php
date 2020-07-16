<?php

use App\Contestant;

trait ProcessesContestants
{
	public __construct (Contestant $contestants)
	{
		$this->contestants = $contestants;
	}

	public static function resolveContestants($contestants)
	{
		// first off, get the contestants' identifiers;
		// resolve their user details
		$contestantIdentififers = Contestant::findAllTheContestantsIdentifiers($contestants);
		$resolvedContestantsDetails = Contestant::whoAreThese($contestantIdentififers);
	}
}