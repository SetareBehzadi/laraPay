<?php

namespace App\Service\Withdrawal\Validator\Handlers;

use App\Repositories\Contracts\WithdrawalRepositoryInterface;
use App\Service\Withdrawal\Validator\Contracts\Validator;
use App\Service\Withdrawal\Validator\Exception\WithdrawalCountLimitException;

class WithdrawalCountLimitValidator extends Validator
{

    protected function process(array $data)
    {
        $countLimit = config('constants.withdrawal.count_limit');
        $withdrawalRepository = resolve(WithdrawalRepositoryInterface::class);
        $withdrawalCount = $withdrawalRepository->getUserAccountWithdrawalCount($data['user_account_id']);

        if ($data['count_limit'] > $countLimit){
            throw new WithdrawalCountLimitException('برداشت از حد مجاز بیشتر است.');
        }

        return true;
    }
}
