<?php 

/*
* Contains all the details needed by the users
* @see PositionDetials
*/

namespace Helpers\Details;

use Interfaces\DetailsInterface;

class AllDetails implements DetailsInterface
{
	public function fetchDetailsUsingPosition($id)
	{
		return $id;
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
