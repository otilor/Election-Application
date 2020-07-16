<?php 

/*
* Contains all the details needed by the users
* @see PositionDetials
*/

namespace Helpers\Details;

use App\Position;
use Distillers\PositionDistiller;
use Interfaces\DetailsInterface;

class AllDetails implements DetailsInterface
{
	public function fetchDetailsUsingPosition($id)
	{
		$position = new Position;
		$positionToBeDistilled = $position->getPositionDetails($id);
		$distilledPosition = new PositionDistiller;
		return $distilledPosition->compressAndDistil($positionToBeDistilled);
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
