<?php
namespace Ecommerce\Auth\Feature;

use Lucid\Foundation\Feature;
use App\Domains\Http\Jobs\RespondWithViewJob;
use Ecommerce\Auth\Jobs\GetDataCustomerJob;
use Auth;
class ViewHomeFeature extends Feature
{
    public function handle()
    {
    	$customer = null;
    	if (Auth::guest()) {
    		//no esta
    		$customer = null;
    	}else{
    		$customer = $this->run(GetDataCustomerJob::class, [ "data" => [ 'id' => Auth::user()->id] ]);
    	}
    	return $this->run(new RespondWithViewJob('welcome', [ "data" => $customer] ));
    }
}