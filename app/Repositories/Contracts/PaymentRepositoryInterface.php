<?php

namespace App\Repositories\Contracts;

interface PaymentRepositoryInterface extends RepositoryInterfce
{

    public function getReportData($startDate,$endDate);

}
