<?php
namespace Ecommerce\Auth\Feature;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use App\Domains\Http\Jobs\RespondWithViewJob;
use Ecommerce\Auth\Jobs\GetDataCustomerJob;
use Auth;

class ViewRegisterFeature extends Feature
{
    public function handle(Request $request)
    {
    	$customer = null;
    	if (Auth::guest()) {
    		//no esta
    		$customer = null;
    	}else{
    		$customer = $this->run(GetDataCustomerJob::class, [ "data" => [ 'id' => Auth::user()->id] ]);
    	}
    	return $this->run(new RespondWithViewJob('register', [ "data" => $customer] ));
    }
}
