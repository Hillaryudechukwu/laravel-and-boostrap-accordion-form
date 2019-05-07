<?php

use Illuminate\Database\Seeder;

class UserDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('users')->insert([
    'name' => Str::random(10),
    'Surname' => Str::random(10),
    'phone' => text::random(10),
    'gender' => Str::random(10),
    'comment' => $faker->comment,
    'email' => $faker->unique()->safeEmail,
    
]);

    }
}
