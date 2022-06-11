<?php

namespace App\Actions\Customer;

use App\Repositories\CustomerRepository;

class CustomerStoreAction
{
    protected $repository;

    function __construct(CustomerRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * create a new entity
     * 
     * @param array $data
     * 
     * @return object $data
     */
    function exec(array $data)
    {
        return $this->repository->store($data);
    }
}
