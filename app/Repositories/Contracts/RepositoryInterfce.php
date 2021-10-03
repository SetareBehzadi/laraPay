<?php
namespace App\Repositories\Contracts;

interface RepositoryInterfce
{
    public function all(array $columns=null);

    public function paginate(int $page,int $per_page = 50);

    public function find(int $id,array $columns);

    public function findBy(array $criteria , array $columns, $single = true);

    public function store(array $data);

    public function update(int $id,array $data);

    public function updateBy(array $criteria,array $data);

    public function delete(int $id);

    public function deleteBy(array $criteria);
}
