<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$titles = ["CUSTOMER","ADMIN"];
    	for ($i=0; $i < 2; $i++) {
	        DB::table('roles')->insert(
	        	[ 'title' => $titles[$i] ]
	        );
        } 
    }
}
