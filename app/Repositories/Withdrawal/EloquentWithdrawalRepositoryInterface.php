<?php

namespace App\Repositories\Withdrawal;

use App\Models\Withdrawal;
use App\Repositories\Contracts\EloquentBaseRepository;
use App\Repositories\Contracts\WithdrawalRepositoryInterface;
use Carbon\Carbon;

class EloquentWithdrawalRepositoryInterface extends EloquentBaseRepository implements WithdrawalRepositoryInterface
{
    protected $model = Withdrawal::class;

    public function getUserAccountWithdrawalCount(int $userAccountId)
    {
        return $this->model->where('withdrawal_user_account_id',$userAccountId)
            ->whereBetween('created_at',Carbon::now()->subMonth(1))->count();
    }
}
