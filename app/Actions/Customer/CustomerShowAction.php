<?php

namespace App\Actions\Customer;

use App\Repositories\CustomerRepository;

class CustomerShowAction
{
    protected $repository;

    function __construct(CustomerRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * get one register by uuid
     * 
     * @param string $identify
     * 
     * @return object $data
     */
    function exec(string $identify)
    {
        return $this->repository->getByIdentify($identify);
    }
}
