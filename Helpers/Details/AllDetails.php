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
		$distilledPosition = new PositionDistiller;
		$distilledPosition->compressAndDistil($position);
		return $position->getPositionDetails($id);
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
