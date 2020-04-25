<?php

use App\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('ne_NP');
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'name' => $faker->name,
                'email' => $faker->email,
                'contact' => $faker->phoneNumber,
                'address' => $faker->address,
                'password' => bcrypt('password')
            ];
            User::create($data);
        }
    }
}
