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
            'status' => $this->pieStatusReport(),
            'traffic' => $this->lineTrafficChart()
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
                    'hoverBackgroundColor' => ['#F59E0B', '#3F83F8', '#8B5CF6', '#10B981', '#EF4444'],
                    'data' => $this->statusReport()
                ]
            ])
            ->options([
                'responsive' => true,
                'legend' => false
            ]);
    }

    /**
     * Line chart for traffic income report.
     */
    public function lineTrafficChart()
    {
        return app()->chartjs
            ->name('traffic')
            ->type('line')
            ->size(['width' => 400, 'height' => 240])
            ->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'])
            ->datasets([
                [
                    'label' => 'Income',
                    'borderColor' => '#7e3af2',
                    'pointBorderColor' => '#7e3af2',
                    'pointBackgroundColor' => '#7e3af2',
                    'pointHoverBackgroundColor' => '#f6f6f6',
                    'pointHoverBorderColor' => 'rgba(220,220,220,1)',
                    'data' => $this->trafficIncome(),
                ]
            ])
            ->options([
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
        return Product::query()->sum('quantity');
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

    /**
     * Sum traffic income per month.
     */
    public function trafficIncome(): array
    {
        for ($i = 1; $i <= 12; $i++) {
            $data[] = Transaction::query()->whereMonth('created_at', $i)->sum('pay_amount');
        }

        return $data;
    }
}
