<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	[
	            'name' => str_random(10),
	            'email' => str_random(10).'@gmail.com',
	            'password' => bcrypt('secret'),
	        ],
	        [
	            'name' => 'Hương 1234567',
	            'email' => str_random(10).'@gmail.com',
	            'password' => bcrypt('secret'),
	        ]
        ]);
    }
}
