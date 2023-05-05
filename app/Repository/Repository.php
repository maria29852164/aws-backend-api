<?php

namespace App\Repository;

use App\Models\BaseModel;
use App\Service\Service;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Repository implements Service
{
    public function __construct(protected BaseModel $model)
    {

    }// end __construct()

    public function getCollection(): Collection
    {
        return $this->model->all();
    }// end getCollection()

    public function getModelInstance(): BaseModel
    {
        return $this->model;
    }// end getModelInstance()

    public function getInstance(int $id): BaseModel  | null
    {
        try {
            $instance = $this->model->findOrFail($id);
        } catch (ModelNotFoundException ) {
            $instance = null;
        }

        return $instance;
    }// end getInstance()

    public function getInstanceWithoutFail(int $id): BaseModel  | null
    {
        return $this->model->find($id);
    }// end getInstanceWithoutFail()

    public function storeInstance(array $data): BaseModel
    {
        $instance = $this->model->create($data);
        $instance->save();

        return $instance;
    }// end storeInstance()

    public function updateInstance(int $id, array $data): BaseModel   | null
    {
        $instance = $this->getInstance($id);
        if ($instance) {
            $instance->update($data);
        }

        return $instance;
    }// end updateInstance()

    public function deleteInstance(int $id): BaseModel |  bool
    {
        $instance = $this->getInstance($id);
        if ( ! empty($instance)) {
            $instance->delete();

            return $instance;
        } else {
            return false;
        }
    }// end deleteInstance()

    public function getWhereArray(array $wheres): Collection
    {
        return $this->model->where($wheres)->get();
    }// end getWhereArray()

    public function getFirstWhereArray(array $wheres): BaseModel  | null
    {
        return $this->model->where($wheres)->first();
    }// end getFirstWhereArray()

    public function getOneWhereClauseEqualFirst(string $where, string $camp): BaseModel  | null
    {
        return $this->model->where($where, $camp)->first();
    }// end getOneWhereClauseEqualFirst()

    public function getDataRandom(int $take): Collection
    {
        return $this->model->inRandomOrder()->take($take)->get();
    }// end getDataRandom()

    public function getOneWithOrWhere(array $where, array $orWhere): BaseModel|null
    {
        return $this->model->where($where)->orWhere($orWhere)->first();
    }
}
