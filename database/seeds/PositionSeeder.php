<?php

use Illuminate\Database\Seeder;
use App\Position;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            Position::create([
                'title'=>$faker->sentence,
                'description'=>$faker->paragraph
            ]);
        }
    }
}
