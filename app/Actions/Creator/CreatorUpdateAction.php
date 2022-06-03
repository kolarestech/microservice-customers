<?php

namespace App\Actions\Creator;

use App\Repositories\CreatorRepository;

class CreatorUpdateAction
{
    protected $repository;

    function __construct(CreatorRepository $repository)
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
