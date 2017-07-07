<?php

use Illuminate\Database\Seeder;

class PasswordReset extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('password_resets')->insert([
            'email' => str_random(10).'@gmail.com',
            'token' => str_random(50),
        ]);
    }
}
