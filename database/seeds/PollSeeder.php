<?php

use Illuminate\Database\Seeder;
use App\Poll;

class PollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            Poll::create([
                'position_id'=>$i,
                'session_id' => $i,
            ]);
        }
    }
}
