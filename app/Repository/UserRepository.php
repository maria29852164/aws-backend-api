<?php

namespace App\Repository;

use App\Models\BaseModel;
use App\Models\User;
use App\Service\UserService;

class UserRepository extends Repository implements UserService
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

}
