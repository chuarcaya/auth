<?php
namespace Ecommerce\Auth\Feature;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use App\Domains\Http\Jobs;
use Auth;
use Redirect;
class LogoutFeature extends Feature
{
    public function handle(Request $request)
    {
    	Auth::logout();
    	return Redirect('');
    }
}
