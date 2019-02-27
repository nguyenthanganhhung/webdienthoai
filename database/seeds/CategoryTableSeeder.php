<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	['name' => 'LG', 'level' => '1'],
        	['name' => 'Iphone', ' level' =>'1'],
        	['name' => 'Xiaomi', 'level'=>'1'],
        	['name' => 'Nokia', 'level'=>'1'],
        	['name' => 'Samsung', 'level'=>'1'],
        	['name' => 'Oppo', 'level'=>'1'],
        	['name' => 'DELL', 'level'=>'2'],
        	['name' => 'Nenovo', 'level'=>'2'],
        	['name' => 'Apple', 'level'=>'2'],
        	['name' => 'Accer', 'level'=>'2'],
        	['name' => 'LG', 'level'=>'2'], 
        ]);
    }
}
