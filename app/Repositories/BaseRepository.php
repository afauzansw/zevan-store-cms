<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BuilderRepository
{
    protected $model;

    /**
     * Base Repository constructor.
     */
    public function __construct(Model $model)
    {
        $this->model = $model->query();
    }

    /**
     * Get all data from resource.
     */
    public function all(array $relation = [], bool $paginate = true, int $perPage = 10)
    {
        if ($paginate) {
            return $this->model->with($relation)->paginate($perPage);
        } else {
            return $this->model->with($relation);
        }
    }

    /**
     * Show specific data from resource.
     */
    public function show(int $id, array $relation = [])
    {
        return $this->model->with($relation)->findOrFail($id);
    }

    /**
     * Store data from request to resource.
     */
    public function store(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * Update specific data from resource.
     */
    public function update(int $id, array $data)
    {
        $this->model->findOrFail($id)->create($data);
        return $this->show($id);
    }

    /**
     * Destroy specific data from resource.
     */
    public function destroy(int $id)
    {
        return $this->model->findOrFail($id)->delete();
    }
}
