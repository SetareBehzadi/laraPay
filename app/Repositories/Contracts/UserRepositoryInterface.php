<?php

namespace App\Repositories\Contracts;

use App\Repositories\Contracts\RepositoryInterfce;

interface UserRepositoryInterface extends RepositoryInterfce
{
    public function getActiveUser();

    public function searchUsers(string $keywords);
    //public function store(array $data); //:UserEntity
}
