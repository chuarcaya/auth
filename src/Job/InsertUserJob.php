<?php
namespace Ecommerce\Auth\Job;

use Lucid\Foundation\Job;
use Ecommerce\Auth\Data\Repositories\UserRepository;
use Ecommerce\Auth\Data\Repositories\CustomerRepository;
use Ecommerce\Auth\Data\Repositories\UserRoleRepository;
use Ecommerce\Auth\Data\Models\User;
use Ecommerce\Auth\Data\Models\Customer;
use Ecommerce\Auth\Data\Models\UserRole;

class InsertUserJob extends Job
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
        $this->userRepository = new UserRepository(new User());
        $this->customerRepository = new CustomerRepository(new Customer());
        $this->userroleRepository = new UserRoleRepository(new UserRole());
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $sex = 'm';
        if ($this->data['genero_description'] != 'Sr.') {
            $sex = 'f';            
        }
        $user_data = [
            'email' => $this->data['email'],
            'password' => bcrypt($this->data['password']),
            'status' => 1,
            'suscription' => 0
        ];
        $customer_data = [
            'doc_number' => $this->data['dni'],
            'firstname' => $this->data['firstname'],
            'lastname' => $this->data['lastname'],
            'phone_number' => $this->data['phone_number'],
            'sex' => $sex,
            'genero_desc' => $this->data['genero_description']
        ];
        $this->userRepository->fillAndSave($user_data);
        $customer = $this->customerRepository->fillAndSave($customer_data);
        $user_rol_data = [
            'user_id' => $customer->id,
            'rol_id' =>  $this->data['role']
        ];
        $this->userroleRepository->fillAndSave($user_rol_data);
    }
}
