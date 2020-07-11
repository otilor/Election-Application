<?php

use Illuminate\Database\Seeder;
use App\Link;
use Illuminate\Support\Str;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
    	
        for ($i = 0; $i < 10; $i++)
        {
        	$positions = $this->randomizeArray();
        	Link::create([
        		'url' => Str::random(8),
        		'positions' => json_encode($positions),

        	]);
        }
    }

    public function randomizeArray()
    {
    	$positions = [];
    	for ( $i = 0; $i < 5; $i++ )
    	{
    		array_push($positions, random_int(1, 5));
    	}

    	return $positions;
    }
}
