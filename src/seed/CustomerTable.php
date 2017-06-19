<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CustomerTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
        for ($i=0; $i < 20; $i++) { 
    		DB::table('customers')->insert([
    			'doc_number' => rand(10000001,99999999),
	            'firstname' => $faker->name,
	            'lastname' => $faker->name,
	            'phone_number' => rand(100000001,999999999),
	            'sex' => 'm',
	            'genero_desc' => 'Sr'
	        ]);
	    }
    }
}
