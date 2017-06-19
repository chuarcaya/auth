<?php
namespace Ecommerce\Auth\Feature;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Ecommerce\Auth\Job\ExistUserJob;
use Ecommerce\Auth\Job\ValidationJob;
use Ecommerce\Auth\Job\LoguedJob;
use App\Domains\Http\Jobs\RespondWithViewJob;
use Redirect;
use Auth;
class LoginFeature extends Feature
{
    public function handle(Request $request)
    {
    	$errors = $this->run(ValidationJob::class, ["data" => $request->all() ]);
    	if ($errors['response']) {
    		return Redirect::back()->withErrors($errors["data"]);
    	}
    	$isLogued =  $this->run(LoguedJob::class, ["data" => $request->all() ]);
    	if ($isLogued['response']) {
    		return Redirect::back()->withErrors($isLogued["data"]);
    	}
        return Redirect('');
    }
}
