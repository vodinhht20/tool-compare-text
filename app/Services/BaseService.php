<?php

namespace App\Services;

use App\Repositories\BaseRepository;

class BaseService
{
    public function __construct(
        protected readonly BaseRepository $appRepository
    ) {
    }

    public function all()
    {
        return $this->appRepository->all();
    }

    public function find(int $id, array $columns = ['*'])
    {
        return $this->appRepository->find($id, $columns);
    }

    public function findWhere(array $conditions, array $columns = ['*'])
    {
        return $this->appRepository->findWhere($conditions, $columns);
    }

    public function findWhereIn(string $field, array $values, array $columns = ['*'])
    {
        return $this->appRepository->findWhereIn($field, $values, $columns);
    }

    public function whereExists(array $conditions)
    {
        return $this->appRepository->whereExists($conditions);
    }

    public function whereFirst(array $conditions, array $columns = ['*'])
    {
        return $this->appRepository->whereFirst($conditions, $columns);
    }

    public function whereLast(array $conditions, array $columns = ['*'])
    {
        return $this->appRepository->whereLast($conditions, $columns);
    }

    public function store(array $data)
    {
        return $this->appRepository->store($data);
    }

    public function insert(array $data)
    {
        return $this->appRepository->insert($data);
    }

    public function update($id, array $data)
    {
        return $this->appRepository->update($id, $data);
    }

    public function updateWhere(array $conditions, array $data)
    {
        return $this->appRepository->updateWhere($conditions, $data);
    }

    public function updateWhereIn(string $field, array $values, array $data)
    {
        return $this->appRepository->updateWhereIn($field, $values, $data);
    }

    public function delete(int $id)
    {
        return $this->appRepository->delete($id);
    }

    public function deleteWhere(array $conditions, bool $forceDelete = false)
    {
        return $this->appRepository->deleteWhere($conditions, $forceDelete);
    }

    public function deleteWhereIn(string $field, array $values, bool $forceDelete = false)
    {
        return $this->appRepository->deleteWhereIn($field, $values, $forceDelete);
    }
}