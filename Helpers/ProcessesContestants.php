<?php

namespace Helpers;

use App\Contestant;

trait ProcessesContestants
{
	public function __construct (Contestant $contestants)
	{
		$this->contestants = $contestants;
	}

	public static function resolveContestants($contestants)
	{
		// First off, get the contestants' identifiers;
		$contestantIdentififers = Contestant::findAllTheContestantsIdentifiers($contestants);

		// Resolve their user details
		$resolvedContestantsDetails = Contestant::whoAreThese($contestantIdentififers);

		return $resolvedContestantsDetails;
	}
}
