<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\MakeLogFile;
use App\Repositories\Contracts\StatisticsRepositoryInterface;
use Illuminate\Http\Request;

class DashboardController extends AdminController
{

    /**
     * @var StatisticsRepositoryInterface
     */
    private $statisticsRepository;

    public function __construct(StatisticsRepositoryInterface $statisticsRepository){

        $this->statisticsRepository = $statisticsRepository;

    }

    public function index()
    {
        MakeLogFile::dispatch();
        $statistics = new \stdClass(); //be sorate objecti pas midim
        $statistics-> totalGateways = $this->statisticsRepository->totalMerchant();
        $statistics-> todayTransactions = $this->statisticsRepository->todayTotalTransactions();
        $statistics-> todayWithdrawal = $this->statisticsRepository->todayTotalWithdrawal();
        $statistics-> totalPending = $this->statisticsRepository->totalPendingGa();
        return view('admin.dashboard.index',compact('statistics'));
    }
}
