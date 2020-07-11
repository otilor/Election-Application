<?php
namespace App\Helpers;

class Position
{

	public static function getDistinctPositions($positions, $wantsJson = false)
	{
		if ($wantsJson)
		{
			return self::getDistinctPositionsAsJson($positions);
		}
		return array_unique($positions);
	}

	private static function toJson($data)
	{
		return json_encode($data);
	}

	private static function getDistinctPositionsAsJson($data)
	{
		$distinct_data = array_unique($data);
		return self::toJson($distinct_data);
	}
}
