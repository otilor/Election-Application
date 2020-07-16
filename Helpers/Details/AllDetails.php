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

class AllDetails implements DetailsInterface
{
	public function getAllDetailsFromPosition($id)
	{
		$positionDetails = $this->fetchPositionDetailsUsingPositionIdentifier($id);
		$contestantDetails = $this->getContestantDetailsFromPosition($positionDetails->id);
	}

	private function getContestantDetailsFromPosition($positionIdentifier)
	{
		return Contestant::getContestantsVyingFor($positionIdentifier);
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
