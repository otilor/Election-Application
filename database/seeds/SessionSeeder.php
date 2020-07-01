<?php

use Illuminate\Database\Seeder;
use App\Session;

class SessionSeeder extends Seeder
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
            Session::create([
                'title'=>$faker->sentence,
                'description'=>$faker->paragraph
            ]);
        }
    }
}
