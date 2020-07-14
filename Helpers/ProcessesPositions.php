<?php

namespace Helpers;

trait ProcessesPositions {

	public static function find($position_id)
	{
		return \App\Position::find($position_id);
	}
}
