<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15; $i++) {
            User::create([
                'name'      => $faker->name(),
                'email'     => $faker->email(),
                'password'  => Hash::make('qwerty1234'),
            ]);
    
        }
    }
}
