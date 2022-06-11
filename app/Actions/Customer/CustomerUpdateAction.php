<?php

namespace App\Actions\Customer;

use App\Repositories\CustomerRepository;

class CustomerUpdateAction
{
    protected $repository;

    function __construct(CustomerRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * update a register os this object
     * 
     * @param array $data
     * @param string $identify
     * 
     * @return Collection $data
     */
    function exec(array $data, string $identify)
    {
        return $this->repository->update($data, $identify);
    }
}
