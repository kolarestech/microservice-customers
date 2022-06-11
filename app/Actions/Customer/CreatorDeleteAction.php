<?php

namespace App\Actions\Customer;

use App\Repositories\CustomerRepository;

class CustomerDeleteAction
{
    protected $repository;

    function __construct(CustomerRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * delete a entity by uuid
     * 
     * @param string $identity
     * 
     * @return void
     */
    function exec(string $identify)
    {
        $this->repository->delete($identify);
    }
}
