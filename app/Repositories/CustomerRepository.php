<?php

namespace App\Repositories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;

class CustomerRepository
{
    /**
     * model instance
     * 
     * @var $model
     */
    protected $model;

    /**
     * cache module
     * 
     * @var const CACHE_MODULE
     */
    const CACHE_MODULE = 'customers';

    function __construct(Customer $model)
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
        return Cache::rememberForever('customers', function () use ($page, $filters) {
            return $this->model->paginate($page);
        });
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
        Cache::forget('customers');

        $model = $this->model->create($data);

        return $model;
    }

    /**
     * get one instance of this object and its relationships
     * 
     * @param string $identify
     * 
     * @return object $model
     */
    public function getByIdentify(string $identify)
    {
        return Cache::rememberForever('customers'.$identify, function () use ($identify) {
            return $this->model->where('uuid', $identify)->firstOrFail();
        });
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

        Cache::forget('customers');
        Cache::forget('customers'.$identify);

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

        Cache::forget('customers'.$indetify);
        Cache::forget('customers');
    }
}
