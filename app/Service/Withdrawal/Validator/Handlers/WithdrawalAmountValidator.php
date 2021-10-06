<?php

namespace App\Service\Withdrawal\Validator\Handlers;

use App\Service\Withdrawal\Validator\Contracts\Validator as ValidatorAlias;
use App\Service\Withdrawal\Validator\Exception\WithdrawalAmountException;

class WithdrawalAmountValidator extends ValidatorAlias
{

    protected function process(array $data)
    {
        $min_amount = config('constants.withdrawal.amount_min');
        if (intval($data['amount']) < $min_amount) {
            throw new WithdrawalAmountException('حداقل مبلغ درخواستی نمیتواند کمتر از 100000 باشد.');
        }
        return true;
    }
}
