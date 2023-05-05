<?php

namespace App\Repository;

use App\Models\BaseModel;
use App\Models\Category;
use App\Service\CategoryService;

class CategoryRepository extends Repository implements CategoryService
{

    public function __construct(Category $model)
    {
        parent::__construct($model);
    }

}
