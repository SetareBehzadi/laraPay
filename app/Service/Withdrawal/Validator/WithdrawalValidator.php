<?php

namespace App\Service\Withdrawal\Validator;

use App\Service\Withdrawal\Validator\Exception\WithdrawalCountLimitException;
use App\Service\Withdrawal\Validator\Handlers\WithdrawalAmountValidator;

class WithdrawalValidator
{

    public function __construct()
    {

    }

    public function validate(array $data)
    {
        $limitCountValidator = new WithdrawalCountLimitException();
        $amountValidator = new WithdrawalAmountValidator($limitCountValidator);

        return $amountValidator->handle($data);
    }
}
