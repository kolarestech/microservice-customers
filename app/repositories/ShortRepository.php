<?php

namespace App\Repositories;

use App\Models\Short;
use Illuminate\Database\Eloquent\Collection;

class ShortRepository
{
    /**
     * model instance
     * 
     * @var $model
     */
    protected $model;

    function __construct(Short $model)
    {
        $this->model = $model;
    }

    /**
     * filter registers os this object model
     * 
     * @param array $filters
     * @param int $page
     * 
     * @return Collection $data
     */
    public function getAll(array $filters, int $page)
    {
        return $this->model->paginate($page);
    }

    /**
     * insert new instance os this object on database
     * 
     * @param array $data
     * 
     * @return object $model
     */
    public function store(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * get one instance of this object and its relationships
     * 
     * @param string $identify
     * 
     * @return object $model
     */
    public function getByIdentify(string $identify, bool $relations = null)
    {
        return $this->model->with($relations ?? [])
                ->where('uuid', $identify)->firstOrFail();
    }

    /**
     * Update a instance of this object
     * 
     * @param array $data
     * @param string identify
     * 
     * @return object $model
     */
    public function update(array $data, string $identify)
    {
        $model = $this->getByIdentify($identify); 

        $model->update($data);

        return $model;
    }

    /**
     * Delete a instance of this object
     * 
     * @param string identify
     * 
     * @return object $model
     */
    public function delete(string $indetify)
    {
        $model = $this->getByIdentify($indetify); 

        $model->delete();
    }
}
