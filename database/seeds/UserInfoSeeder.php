<?php

use Illuminate\Database\Seeder;
use App\User;
use App\UserInfo;
use Faker\Generator as Faker;


class UserInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();
        foreach ($users as $user) {
            UserInfo::create([
                'user_id' => $user->id,
                'city'    => $faker->city(),
                'address' => $faker->address(),
                'number'  => $faker->phoneNumber()
            ]);
        }
    }
}
