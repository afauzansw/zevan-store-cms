<?php

namespace App\Http\Controllers\Admin\Transaction;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use App\Http\Response\ApiResponse;
use App\Models\Transaction;
use Exception;
use http\Env\Request;
use Illuminate\Http\JsonResponse;

class TransactionController extends Controller
{
    /**
     * Display a listing of the transactions.
     */
    public function index()
    {
        $transaction = Transaction::query()->get();

        return view('pages.transaction.index', $transaction);
    }

    /**
     * Display the specified transaction.
     */
    public function show($id)
    {
        $transaction = Transaction::query()->findOrFail($id);

        return view('pages.transaction.show', $transaction);
    }

    /**
     * Remove the specified transaction from storage.
     */
    public function destroy($id)
    {
        Transaction::query()->findOrFail($id)->delete();
        return redirect()->back();
    }

    /**
     * Change status of transaction.
     */
    public function changeStatus(Request $request)
    {
        Transaction::query()->update($request->status);
        return redirect()->back();
    }
}
