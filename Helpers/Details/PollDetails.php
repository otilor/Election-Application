<?php

namespace Helpers\Details;

use Interfaces\DetailsInterface;

class PollDetails implements DetailsInterface
{
	public function details()
	{
		dump ("I am in poll details class");
	}

	public function detailsFromId($id)
	{
		//
	}
}
