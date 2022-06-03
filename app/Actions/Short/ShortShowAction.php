<?php

namespace App\Actions\Short;

use App\Repositories\ShortRepository;

class ShortShowAction
{
    protected $repository;

    function __construct(ShortRepository $shortRepository)
    {
        $this->repository = $shortRepository;
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
