<?php 

/*
* Contains all the details needed by the users
* @see PositionDetials
*/

namespace Helpers\Details;

use App\Contestant;
use App\Position;

use Distillers\PositionDistiller;
use Interfaces\DetailsInterface;

use Helpers\ProcessesContestants;

class AllDetails implements DetailsInterface
{
	public function getAllDetailsFromPosition($id)
	{
		$positionDetails = $this->fetchPositionDetailsUsingPositionIdentifier($id);
		$contestantDetails = $this->getContestantDetailsFromPosition($positionDetails->id);
		return $contestantDetails;
	}

	private function getHalfBakedContestantDetailsFromPosition($positionIdentifier)
	{
		return Contestant::getContestantsVyingFor($positionIdentifier);
	}

	private function getContestantsVote($contestants)
	{
		dd ( ProcessesContestants::numberOfVotes($contestants) );
	}

	private function getContestantDetailsFromPosition($positionIdentifier)
	{
		$contestants = $this->getHalfBakedContestantDetailsFromPosition($positionIdentifier);
		dump ($this->getContestantsVote($contestants));
	}

	private function fetchPositionDetailsUsingPositionIdentifier($id)
	{
		return Position::getPositionDetails($id);
	}

	private function details()
	{
		//
	}

	public function detailsFromId($id)
	{
		//
	}
}
