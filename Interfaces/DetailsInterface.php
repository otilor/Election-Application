<?php

namespace Interfaces;

interface DetailsInterface
{
	// Default details method
	public function details();

	// If there is a specific identifier, proceed to use to get resource
	public function detailsFromId($id);
}
