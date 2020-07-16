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
		// 
	}

	public function details()
	{
		//
	}

	public function detailsFromId($id)
	{
		return $id;
	}
}
