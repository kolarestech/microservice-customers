<?php

namespace App\Actions\Short;

use App\Repositories\ShortRepository;

class ShortStoreAction
{
    protected $repository;

    function __construct(ShortRepository $shortRepository)
    {
        $this->repository = $shortRepository;
    }

    function exec(array $data)
    {
        return $this->repository->store($data);
    }
}
