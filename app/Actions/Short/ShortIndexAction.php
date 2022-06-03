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

    function exec(array $filters)
    {
        return $this->repository->getAll($filters, $filters['page']);
    }
}
