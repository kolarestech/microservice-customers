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

    function exec(array $data, string $identify)
    {
        return $this->repository->update($data, $identify);
    }
}
