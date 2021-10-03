<?php

namespace App\Repositories\Contracts;

class EloquentBaseRepository implements RepositoryInterfce
{
    protected $model;

    public function find(int $id,array $columns)
    {
        return $this->model::find($id);
    }

    public function store(array $data)
    {
       // dd(new $this->model);
        return $this->model::create($data);
    }

    public function update(int $id, array $data)
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }

    public function findBy(array $criteria, array $columns, $single = true)
    {
        // TODO: Implement findBy() method.
    }

    public function updateBy(array $criteria, array $data)
    {
        // TODO: Implement updateBy() method.
    }

    public function deleteBy(array $criteria)
    {
        // TODO: Implement deleteBy() method.
    }

    public function all(array $columns=null)
    {
        if (!is_null($columns)){
            return $this->model::all($columns);
        }
        return $this->model::all();
    }

    public function paginate(int $page, int $per_page = 50)
    {
        // TODO: Implement paginate() method.
    }
}
