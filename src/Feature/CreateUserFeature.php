<?php
namespace Ecommerce\Auth\Feature;

use Lucid\Foundation\Feature;
use App\Domains\Http\Jobs\RespondWithJsonJob;
use Ecommerce\Auth\Jobs\ExistUserJob;
use Ecommerce\Auth\Jobs\InsertUserJob;

class CreateUserFeature extends Feature
{
    public function handle()
    {	
        $exist = $this->run(ExistUserJob::class);
        if ($exist == 1) {
            $message = "Este usuario ya existe";
            return $message;
        }else{
            $this->run(InsertUserJob::class);
            $message = "Usted se registro correctamente.";
            return $message;
        }
    	//return $this->run(new RespondWithJsonJob($users));
    }
}
