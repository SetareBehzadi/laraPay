<?php

namespace App\Repositories\Contracts;

interface StatisticsRepositoryInterface
{
    public function totalMerchant();

    public function todayTotalTransactions();

    public function todayTotalWithdrawal();

    public function totalPendingGa();
}
