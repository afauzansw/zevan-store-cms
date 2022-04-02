<?php

namespace App\Repositories;

interface BuilderRepository
{
    /**
     * Get all data from resource.
     */
    public function all(array $relation = [], bool $paginate = true, int $perPage = 10);

    /**
     * Show specific data from resource.
     */
    public function show(int $id, array $relation = []);

    /**
     * Store data from request to resource.
     */
    public function store(array $data);

    /**
     * Update specific data from resource.
     */
    public function update(int $id, array $data);

    /**
     * Destroy specific data from resource.
     */
    public function destroy(int $id);
}
