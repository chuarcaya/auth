<?php
namespace Ecommerce\Auth\Feature;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use App\Domains\Http\Jobs\RespondWithJsonJob;
use App\Domains\User\Jobs\GetUsersJob;

class ListUsersFeature extends Feature
{
    public function handle(Request $request)
    {	
    	$users = $this->run(GetUsersJob::class);
    	return $this->run(new RespondWithJsonJob($users));
    }
}
