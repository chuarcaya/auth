<?php
namespace Ecommerce\Auth\Job;

use Lucid\Foundation\Job;
use Validator;
use App\Domains\Http\Jobs\RespondWithJsonJob;

class ValidationJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $data;
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {   
        $errors['response'] = false;
        
        $validate = Validator::make($this->data, [
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);
        if ($validate->fails()) {
            $errors['response'] = true;
            $errors['data'] = $validate->errors();
        }
        return $errors;
    }
}