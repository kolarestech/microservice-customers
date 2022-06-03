<?php

namespace App\Actions\Creator;

use App\Repositories\CreatorRepository;

class CreatorShowAction
{
    protected $repository;

    function __construct(CreatorRepository $repository)
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
