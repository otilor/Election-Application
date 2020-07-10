<?php

use Illuminate\Database\Seeder;
use App\Link;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++)
        {
        	Link::create([
        		'url' => str_random(8),
        		'positions' => [1, 1, 3, 2],

        	])
        }
    }
}
