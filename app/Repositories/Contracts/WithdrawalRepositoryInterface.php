<?php

namespace App\Repositories\Contracts;

interface WithdrawalRepositoryInterface extends RepositoryInterfce
{
    public function getUserAccountWithdrawalCount(int $userId);
}
