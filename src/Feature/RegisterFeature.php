<?php
namespace Ecommerce\Auth\Feature;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Ecommerce\Auth\Job\ValidateRegisterJob;
use Ecommerce\Auth\Job\InsertUserJob;
use Ecommerce\Auth\Job\LoguedJob;
use Auth;
use Redirect;
class RegisterFeature extends Feature
{
    public function handle(Request $request)
    {
    	$errors = $this->run(ValidateRegisterJob::class, ["data" => $request->all() ]);
    	if ($errors['response']) {
    		return Redirect::back()->withErrors($errors["data"]);
    	}
    	$this->run(InsertUserJob::class, ["data" => $request->all() ]);
    	$this->run(LoguedJob::class, ["data" => $request->all() ]);
    	return Redirect('');
    }
}
