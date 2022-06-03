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

    public function getAll(array $filters, int $page)
    {
        return $this->model->paginate($page);
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

    public function getByIdentify(string $identify)
    {
        return $this->model->where('uuid', $identify)->firstOrFail();
    }

    public function update(array $data, string $identify)
    {
        $model = $this->getByIdentify($identify); 

        $model->update($data);

        return $model;
    }

    public function delete(string $indetify)
    {
        $model = $this->getByIdentify($indetify); 

        $model->delete();
    }
}
