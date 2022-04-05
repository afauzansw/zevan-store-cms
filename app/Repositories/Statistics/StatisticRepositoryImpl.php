<?php

namespace App\Repositories\Statistics;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;

class StatisticRepositoryImpl implements StatisticRepository
{
    /**
     * Report all statistic.
     */
    public function allStatistic(): array
    {
        return [
            'total_transaction' => $this->totalTransaction(),
            'total_pay_amount' => $this->totalPayAmount(),
            'total_product' => $this->totalProduct(),
            'product_sold' => $this->productSold(),
            'transaction_history' => $this->transactionHistory(),
            'status' => $this->pieStatusReport()
        ];
    }

    /**
     * Pie chart for transaction status report.
     */
    public function pieStatusReport()
    {
        return app()->chartjs
            ->name('status')
            ->type('pie')
            ->size(['width' => 400, 'height' => 200])
            ->labels(['PENDING', 'APPROVE', 'SENDING', 'SUCCESS', 'FAILED'])
            ->datasets([
                [
                    'backgroundColor' => ['#D97706', '#1C64F2', '#7E3AF2', '#059669', '#E02424'],
                    'hoverBackgroundColor' => ['#D97706', '#1C64F2', '#7E3AF2', '#059669', '#E02424'],
                    'data' => $this->statusReport()
                ]
            ])
            ->options([
                'responsive' => true,
                'legend' => false
            ]);
    }

    /**
     * Report total transaction.
     */
    public function totalTransaction(): int
    {
        return Transaction::query()->count();
    }

    /**
     * Report total income of transaction.
     */
    public function totalPayAmount(): int
    {
        return Transaction::query()->sum('pay_amount');
    }

    /**
     * Report total of product.
     */
    public function totalProduct(): int
    {
        return Product::query()->count();
    }

    /**
     * Report total of product sold.
     */
    public function productSold(): int
    {
        return TransactionDetail::query()->count();
    }

    /**
     * Report recent transaction history.
     */
    public function transactionHistory(int $take = 7)
    {
        return Transaction::query()->orderByDesc('created_at')->take($take)->get();
    }

    /**
     * Data for transaction status report.
     */
    public function statusReport(): array
    {
        foreach (Transaction::status as $key => $value) {
            $data[] = Transaction::query()->where('status', $value)->count();
        }

        return $data;
    }
}
