<?php

namespace App\Repositories\Statistics;

interface StatisticRepository
{
    /**
     * Report all statistic.
     */
    public function allStatistic();

    /**
     * Pie chart for transaction status report.
     */
    public function pieStatusReport();

    /**
     * Report total transaction.
     */
    public function totalTransaction();

    /**
     * Report total income of transaction.
     */
    public function totalPayAmount();

    /**
     * Report total of product.
     */
    public function totalProduct();

    /**
     * Report total of product sold.
     */
    public function productSold();

    /**
     * Report recent transaction history.
     */
    public function transactionHistory(int $take = 7);

    /**
     * Data for transaction status report.
     */
    public function statusReport();
}
