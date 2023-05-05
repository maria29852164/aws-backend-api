<?php

namespace App\Service;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface Service
{
    // get collection all
    public function getCollection(): Collection;

    // get model instance from repository
    public function getModelInstance(): BaseModel;

    // get instance by id
    public function getInstance(int $id): BaseModel | null;

    // get instance by id if fail return null
    public function getInstanceWithoutFail(int $id): BaseModel | null;

    // store instance
    public function storeInstance(array $data): BaseModel;

    // update instance data is array
    public function updateInstance(int $id, array $data): BaseModel   | null;

    // delete instance
    public function deleteInstance(int $id): BaseModel | bool;

    // get results by wheres in array
    public function getWhereArray(array $wheres): Collection;

    // get result first by wheres in array
    public function getFirstWhereArray(array $wheres): BaseModel | null |Model;

    // get onw where clause equals first
    public function getOneWhereClauseEqualFirst(string $where, string $camp): BaseModel | null |  Model;

    // get random item from collection model
    public function getDataRandom(int $take): Collection;

    public function getOneWithOrWhere(array $where, array $orWhere): BaseModel | null;
}
