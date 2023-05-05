<?php

namespace App\Repository;

use App\Models\BaseModel;
use App\Models\Product;
use App\Service\ProductService;

class ProductRepository extends Repository implements ProductService
{
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }

}
