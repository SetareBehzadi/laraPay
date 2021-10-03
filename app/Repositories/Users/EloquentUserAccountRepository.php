<?php

namespace App\Repositories\Users;

use App\Models\UserAccount;
use App\Repositories\Contracts\EloquentBaseRepository;
use App\Repositories\Contracts\UserAccountRepository;

class EloquentUserAccountRepository extends EloquentBaseRepository implements UserAccountRepository
{
    protected $model = UserAccount::class;
    public function search(string $term)
    {
       return $this->model::where('user_account_title','LIKE',"%{$term}%")
           ->get(['user_account_title as id','user_account_title as text']);
    }
}
