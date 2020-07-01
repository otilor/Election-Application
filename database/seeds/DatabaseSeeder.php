<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => Str::random(10),
                'email'=>Str::random(10).'@gmail.com',
                'password' => Hash::make('password'),
            ]);
        }
    }
}
