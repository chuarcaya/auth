<?php

use Illuminate\Database\Seeder;
use App\Data\Repositories\UserRepository;
use App\Data\Models\User;
use Illuminate\Database\Eloquent\Model;

class UserRolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->userRepository = new UserRepository(new User());
    	$users = $this->userRepository->all();
       	foreach ($users as $key => $value) {
    		if ($value->email =='chuarcaya@inventarte.net') {
    			DB::table('user_roles')->insert([
		            'user_id' => $value->user_id,
		            'rol_id' => 2
		        ]);
    		}else{
    			DB::table('user_roles')->insert([
		            'user_id' => $value->user_id,
		            'rol_id' => 1
		        ]);
    		}
    	}
    }
}
