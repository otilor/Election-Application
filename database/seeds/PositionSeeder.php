<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
                'token' => Str::random(15),
                'description'=>$faker->paragraph
            ]);
        }
    }
}
