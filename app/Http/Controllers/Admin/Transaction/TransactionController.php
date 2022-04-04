<?php

namespace App\Http\Controllers\Admin\Transaction;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Repositories\Transactions\Admin\AdminTransactionRepository;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    protected $repository;

    /**
     * Transaction Controller constructor.
     */
    public function __construct(AdminTransactionRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the transactions.
     */
    public function index()
    {
        $transactions = $this->repository->all([], true);
        return view('pages.transaction.index', ['transactions' => $transactions]);
    }

    /**
     * Display the specified transaction.
     */
    public function show($id)
    {
        $transaction = $this->repository->show($id);
        return view('pages.transaction.show', ['transaction' => $transaction]);
    }

    /**
     * Remove the specified transaction from storage.
     */
    public function destroy($id)
    {
        $this->repository->destroy($id);
        return redirect()->back();
    }

    /**
     * Change status of transaction.
     */
    public function changeStatus(int $id, Request $request)
    {
        $this->repository->changeStatus($id, $request->status);
        return redirect()->back();
    }
}
