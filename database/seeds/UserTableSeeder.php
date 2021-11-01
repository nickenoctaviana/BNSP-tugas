<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        DB::table('users')->insert([
            "name" => $faker->name(),
            "email" => $faker->email(),
            "password" => $faker->password(),
            "role" => 'admin',
            "remember_token" => Str::random(10)
        ]);
    }
}
