<?php

namespace Helpers\Details;


use Interfaces\DetailsInterface;
use \Helpers\ProcessesDetails;
use App\Position;

class  PositionDetails implements DetailsInterface 
{
	
	private function details()
	{
		//
	}

	public function detailsFromId($id)
	{
		$position = new Position;
		return $position->getPositionDetails($id);
	}


}
