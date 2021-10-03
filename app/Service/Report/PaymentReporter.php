<?php

use App\Repositories\Contracts\PaymentRepositoryInterface;

class PaymentReporter
{

    protected $paymentRepository;

    /**
     * @param $paymentRepository
     */
    public function __construct()
    {
        $this->paymentRepository = resolve(PaymentRepositoryInterface::class);
    }


    public function between($startDate,$endDate,ReporterOutput $output)
    {
        $result = $this->paymentRepository->getReportData($startDate,$endDate);
        return $output->renderOutPut($result);
    }
}
