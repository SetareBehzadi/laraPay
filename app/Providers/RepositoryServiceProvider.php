<?php

namespace App\Providers;

use App\Repositories\Contracts\PaymentRepositoryInterface;
use App\Repositories\Contracts\StatisticsRepositoryInterface;
use App\Repositories\Contracts\UserAccountRepository;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Payment\EloquentPaymentRepository;
use App\Repositories\Statistic\EloquentStatisticsRepository;
use App\Repositories\Users\EloquentUserAccountRepository;
use App\Repositories\Users\EloquentUserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class,
            EloquentUserRepositoryInterface::class);

        $this->app->bind(UserAccountRepository::class,
            EloquentUserAccountRepository::class);

        $this->app->bind(PaymentRepositoryInterface::class,EloquentPaymentRepository::class);
        $this->app->bind(StatisticsRepositoryInterface::class,EloquentStatisticsRepository::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
