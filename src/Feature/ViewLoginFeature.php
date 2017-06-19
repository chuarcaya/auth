<?php
namespace Ecommerce\Auth\Feature;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use App\Domains\Http\Jobs\RespondWithViewJob;
use Ecommerce\Auth\Job\GetDataCustomerJob;
use Auth;

class ViewLoginFeature extends Feature
{
    public function handle(Request $request){
    	$customer = null;
    	if (Auth::guest()) {
    		//no esta
    		$customer = null;
    	}else{
    		$customer = $this->run(GetDataCustomerJob::class, [ "data" => [ 'id' => Auth::user()->id ]]);
    	}
    	return $this->run(new RespondWithViewJob('login', [ "data" => $customer] ));
    }
}