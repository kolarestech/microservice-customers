<?php

namespace App\Actions\Customer;

use App\Repositories\CustomerRepository;

class CustomerIndexAction
{
    protected $repository;

    function __construct(CustomerRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * list a collection of this object
     * by some filters
     * 
     * @param array $filters['page']
     * 
     * @return Collection $data
     */
    function exec(array $filters)
    {
        return $this->repository->getAll($filters, $filters['page']);
    }
}
