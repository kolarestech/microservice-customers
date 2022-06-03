<?php

namespace App\Actions\Creator;

use App\Repositories\CreatorRepository;

class CreatorIndexAction
{
    protected $repository;

    function __construct(CreatorRepository $repository)
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
