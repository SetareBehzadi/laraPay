<?php
namespace App\Repositories\Statistic;
use App\Repositories\Contracts\StatisticsRepositoryInterface;

class EloquentStatisticsRepository implements StatisticsRepositoryInterface
{

    public function totalMerchant()
    {
        return 70;
    }

    public function todayTotalTransactions()
    {
       return 780;
    }

    public function todayTotalWithdrawal()
    {
        // TODO: Implement todayTotalWithdrawal() method.
        return 7000;
    }

    public function totalPendingGa()
    {
        // TODO: Implement totalPendingGa() method.
        return 200;
    }
}
