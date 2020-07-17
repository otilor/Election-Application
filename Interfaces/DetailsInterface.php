<?php

namespace Interfaces;

interface DetailsInterface
{

	// If there is a specific identifier, proceed to use to get resource
	public function detailsFromId($id);
}
