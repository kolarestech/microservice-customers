<?php

namespace App\Actions\Short;

use App\Repositories\ShortRepository;

class ShortUpdateAction
{
    protected $repository;

    function __construct(ShortRepository $shortRepository)
    {
        $this->repository = $shortRepository;
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
