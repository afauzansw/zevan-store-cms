<?php

namespace App\Providers;

use App\Repositories\BaseRepository;
use App\Repositories\BuilderRepository;
use App\Repositories\Products\Admin\AdminProductRepository;
use App\Repositories\Products\Admin\AdminProductRepositoryImpl;
use App\Repositories\Products\Api\ApiProductRepository;
use App\Repositories\Products\Api\ApiProductRepositoryImpl;
use App\Repositories\Statistics\StatisticRepository;
use App\Repositories\Statistics\StatisticRepositoryImpl;
use App\Repositories\Transactions\Admin\AdminTransactionRepository;
use App\Repositories\Transactions\Admin\AdminTransactionRepositoryImpl;
use App\Repositories\Transactions\Api\ApiTransactionRepository;
use App\Repositories\Transactions\Api\ApiTransactionRepositoryImpl;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register repository services.
     */
    public function register()
    {
        $this->app->bind(BuilderRepository::class, BaseRepository::class);
        $this->app->bind(AdminProductRepository::class, AdminProductRepositoryImpl::class);
        $this->app->bind(ApiProductRepository::class, ApiProductRepositoryImpl::class);
        $this->app->bind(AdminTransactionRepository::class, AdminTransactionRepositoryImpl::class);
        $this->app->bind(ApiTransactionRepository::class, ApiTransactionRepositoryImpl::class);
        $this->app->bind(StatisticRepository::class, StatisticRepositoryImpl::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        //
    }
}
