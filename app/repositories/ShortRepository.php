<?php

namespace App\Repositories;

use App\Models\Short;
use Illuminate\Database\Eloquent\Collection;

class ShortRepository
{
    protected $model;

    function __construct(Short $model)
    {
        $this->model = $model;
    }

    public function getAll(array $filters, int $page) : Collection
    {
        return $this->model->paginate();
    }

    public function store(array $data) : Short
    {
        return $this->model->create($data);
    }

    public function getByIdentify(string $identify) : Short
    {
        return $this->model->where('uuid', $identify)->firstOrFail();
    }

    public function update(array $data, string $identify)  : Short
    {
        $model = $this->getByIdentify($identify); 

        $model->update($data);

        return $model;
    }

    public function delete(string $indetify) : void
    {
        $model = $this->getByIdentify($indetify); 

        $model->delete();
    }
}
