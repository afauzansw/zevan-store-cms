<?php

namespace App\Repositories\Transactions\Admin;

use App\Repositories\BuilderRepository;

interface AdminTransactionRepository extends BuilderRepository
{
    /**
     * Change status transaction.
     */
    public function changeStatus(int $id, string $status);
}
