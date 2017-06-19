<?php 
namespace Ecommerce\Auth\Data\Repositories;

use App\Data\Repositories\Repository;
use Ecommerce\Auth\Data\Models\User;
use Ecommerce\Auth\Data\Models\Role;

class UserRepository extends Repository
{
    public function hasRole($role){
    	return $this->model->hasRole($role);
    }
    public function attachRole($role){
    	return $this->model->roles()->attach(Role::where("name",$role)->first());
    }
    public function getRoles(){
    	return $this->model->roles();
    }
}