<?php
namespace Ecommerce\Auth\Job;

use Lucid\Foundation\Job;
use Validator;

class ValidateRegisterJob extends Job
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
            'genero_description' => 'required',
            'dni' => 'numeric|digits_between:7,9',
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'phone_number' => 'required|regex:/[1-9]{1}[0-9]{3,14}$/',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'repassword' => 'required|min:6|same:password',
        ]);
        if ($validate->fails()) {
            $errors['response'] = true;
            $errors['data'] = $validate->errors();
        }
        return $errors;
    }
}
