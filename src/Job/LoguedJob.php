<?php
namespace Ecommerce\Auth\Job;

use Lucid\Foundation\Job;
use Ecommerce\Auth\Data\Repositories\UserRepository;
use Ecommerce\Auth\Data\Models\User;
use Auth;

class LoguedJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $data;
    protected $userRepository;
    public function __construct(array $data = [])
    {
        $this->userRepository = new UserRepository(new User());
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $credentials = [
            'email' =>  $this->data['email'],
            'password' => $this->data['password'],
        ];
        $errors['response'] = false;
        if(Auth::attempt($credentials)){
            $user = $this->userRepository->findBy('email', $credentials['email']);
            $rol = $user->roles();
            if ($this->data['url'] = $rol[0]->title) {
                Auth::login($user);
                return $errors;
            }else{
                $errors['response'] = true;
                $errors['data']['message'] = 'Este usuario no existe'; 
            }
        }else{
            $errors['response'] = true;
            $errors['data']['message'] = 'Este usuario no existe'; 
        }
        return $errors;
    }
}
