<?php

namespace App\Actions\Short;

use App\Repositories\ShortRepository;

class ShortIndexAction
{
    protected $repository;

    function __construct(ShortRepository $shortRepository)
    {
        $this->repository = $shortRepository;
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
