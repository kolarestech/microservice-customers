<?php

namespace App\Actions\Creator;

use App\Repositories\CreatorRepository;

class CreatorDeleteAction
{
    protected $repository;

    function __construct(CreatorRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * delete a entity by uuid
     * 
     * @param string $identity
     * 
     * @return void
     */
    function exec(string $identify)
    {
        $this->repository->delete($identify);
    }
}
