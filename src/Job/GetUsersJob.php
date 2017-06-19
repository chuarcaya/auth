<?php
namespace App\Domains\User\Jobs;

use Lucid\Foundation\Job;

class GetUsersJob extends Job
{
    /**
    * Create a new job instance.
    *
    * @return void
    */
    public function __construct()
    {

    }

    /**
    * Execute the job.
    *
    * @return void
    */
    public function handle()
    {   
        return [
            ['name' => 'John Doe'],
            ['name' => 'Jane Doe'],
            ['name' => 'Tommy Atkins'],
        ];
    }
}
