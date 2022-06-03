<?php

namespace App\Actions\Creator;

use App\Repositories\CreatorRepository;

class CreatorStoreAction
{
    protected $repository;

    function __construct(CreatorRepository $repository)
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
