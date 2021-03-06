<?php

namespace App\Repositories\Transactions\Admin;

use App\Models\Transaction;
use App\Repositories\BaseRepository;

class AdminTransactionRepositoryImpl extends BaseRepository implements AdminTransactionRepository
{
    protected $model;

    /**
     * Base Repository constructor.
     */
    public function __construct(Transaction $model)
    {
        $this->model = $model;
        parent::__construct($model);
    }

    /**
     * Change status transaction.
     */
    public function changeStatus(int $id, array $data)
    {
        Transaction::query()->findOrFail($id)->update($data);
    }
}
