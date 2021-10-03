<?php

namespace App\Repositories\Users;

use App\Models\User;
use App\Repositories\Contracts\EloquentBaseRepository;
use App\Repositories\Contracts\UserRepositoryInterface;

class EloquentUserRepositoryInterface extends EloquentBaseRepository implements UserRepositoryInterface
{
    protected $model=User::class;
    public function getActiveUser()
    {
        // TODO: Implement getActiveUser() method.
    }

    public function searchUsers(string $keywords)
    {
        return $this->model::where('name','like','%'.$keywords.'%')->orWhere('email','like','%'.$keywords.'%')
            ->get(['id','name','email']);
    }
}
