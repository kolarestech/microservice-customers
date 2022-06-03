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

    function exec(string $identify)
    {
        return $this->repository->getByIdentify($identify);
    }
}
