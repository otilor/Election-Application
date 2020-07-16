<?php

namespace Helpers\Details;

use Interfaces\DetailsInterface;

class ContestantDetails implements DetailsInterface
{
	public function output ()
	{
		dd ("I am in contestant details!");
	}
}
