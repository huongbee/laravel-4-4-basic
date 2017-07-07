<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$this->call(Product::class);
        $this->call(ProductType::class);
        $this->call(User::class);
        $this->call(PasswordReset::class);
        // DB::table('users')->insert([
        // 	[
	       //      'name' => str_random(10),
	       //      'email' => str_random(10).'@gmail.com',
	       //      'password' => bcrypt('secret'),
	       //  ],
	       //  [
	       //      'name' => 'Hương',
	       //      'email' => str_random(10).'@gmail.com',
	       //      'password' => bcrypt('secret'),
	       //  ]
        // ]);
        // // DB::table('product')->insert([
        // //     'name' => str_random(10),
        // //     'content' => str_random(10),
        // // ]);
    }




}
