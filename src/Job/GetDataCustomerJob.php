<?php
namespace Ecommerce\Auth\Job;

use Lucid\Foundation\Job;
use Ecommerce\Auth\Data\Repositories\CustomerRepository;
use Ecommerce\Auth\Data\Models\Customer;

class GetDataCustomerJob extends Job
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
        $this->customerRepository = new CustomerRepository(new Customer());
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $customer_data = $this->customerRepository->findBy('customer_id', $this->data['id']);
        return $customer_data;
    }
}
