<?php

namespace App\Repositories\Contracts;

interface UserAccountRepository extends RepositoryInterfce
{
    public function search(string $term);
}
