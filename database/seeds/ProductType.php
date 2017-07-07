<?php

use Illuminate\Database\Seeder;

class ProductType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_product')->insert([
            'name' => str_random(10),
            'description' => str_random(50),
        ]);
    }
}
