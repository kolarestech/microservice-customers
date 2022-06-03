<?php

namespace App\Actions\Short;

use App\Repositories\ShortRepository;

class ShortDeleteAction
{
    protected $repository;

    function __construct(ShortRepository $shortRepository)
    {
        $this->repository = $shortRepository;
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
