<?php
namespace App\Repositories\Payment;

use App\Repositories\Contracts\EloquentBaseRepository;
use App\Repositories\Contracts\PaymentRepositoryInterface;

class EloquentPaymentRepository extends EloquentBaseRepository implements PaymentRepositoryInterface
{

    public function getReportData($startDate, $endDate)
    {
       return DB::table('payments')->whereBetween('paid_at',[$startDate,$endDate])->sum('amount');
    }
}
