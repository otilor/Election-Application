<?php

namespace Helpers\Details;


use Interfaces\DetailsInterface;
use \Helpers\ProcessesDetails;
use App\Position;

class  PositionDetails implements DetailsInterface 
{
	
	public function details()
	{
		dump ("Work is about to start!");
		return ProcessesDetails::processPosition();
	}

	public function detailsFromId($id)
	{
		$position = new Position;
		return $position->getPositionDetails($id);
	}


}
