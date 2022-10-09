<?php

namespace App\Repositories;

abstract class BaseRepository
{
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->model = $this->getModel();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return $this->model->query();
    }

    public function all(array $columns = ['*'])
    {
        return $this->model->get($columns);
    }

    public function find(int $id, array $columns = ['*'])
    {
        return $this->model->find($id, $columns);
    }

    public function findWhere(array $conditions, array $columns = ['*'])
    {
        $query = $this->query();

        $this->applyConditions($query, $conditions);

        return $query->get($columns);
    }

    public function findWhereIn(string $field, array $values, array $columns = ['*'])
    {
        return $this->model->whereIn($field, $values)->get($columns);
    }

    public function whereExists(array $conditions)
    {
        $query = $this->query();

        $this->applyConditions($query, $conditions);

        return $query->exists();
    }

    public function whereFirst(array $conditions, array $columns = ['*'])
    {
        $query = $this->query();

        $this->applyConditions($query, $conditions);

        return $query->select($columns)->first();
    }

    public function whereLast(array $conditions, array $columns = ['*'])
    {
        $query = $this->query();

        $this->applyConditions($query, $conditions);

        return $query->select($columns)->orderBy('id', 'DESC')->first();
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

    public function insert(array $data)
    {
        return $this->model->insert($data);
    }

    public function update(int $id, array $data)
    {
        return $this->model->where('id', $id)->update($data);
    }

    public function updateWhere(array $conditions, array $data)
    {
        $query = $this->query();

        $this->applyConditions($query, $conditions);

        return $query->update($data);
    }

    public function updateWhereIn(string $field, array $values, array $data)
    {
        return $this->model->whereIn($field, $values)->update($data);
    }

    public function delete(int $id, bool $forceDelete = false)
    {
        if ($forceDelete) {
            return $this->model->find($id)?->forceDelete();
        }

        return $this->model->find($id)?->delete();
    }

    /**
     * Delete records with conditions from the database.
     *
     * @return mixed
     */
    public function deleteWhere(array $conditions, bool $forceDelete = false)
    {
        $query = $this->query();

        $this->applyConditions($query, $conditions);

        if ($forceDelete) {
            return $query->forceDelete();
        }

        return $query->delete();
    }

    /**
     * Delete records with conditions from the database.
     *
     * @return mixed
     */
    public function deleteWhereIn(string $field, array $values, bool $forceDelete = false)
    {
        $query = $this->query()->whereIn($field, $values);

        if ($forceDelete) {
            return $query->forceDelete();
        }

        return $query->delete();
    }

    /**
     * @param \Illuminate\Database\Eloquent\Builder &$query
     * @param array $conditions
     * @return void
     */
    protected function applyConditions(&$query, array $conditions)
    {
        foreach ($conditions as $field => $value) {
            if (is_array($value)) {
                list($field, $operator, $val) = $value;

                $query->where($field, $operator, $val);
            } else {
                $query->where($field, '=', $value);
            }
        }
    }
}