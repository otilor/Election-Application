<?php
namespace App\Helpers;

class Position
{
	public  static function getDistinctPositions($positions)
	{
		return array_unique($positions);
	}
}
