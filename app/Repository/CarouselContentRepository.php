<?php

namespace App\Repository;

use App\Models\BaseModel;
use App\Models\CarouselContent;
use App\Service\CarouselContentService;
use Illuminate\Database\Eloquent\Model;

class CarouselContentRepository extends Repository implements CarouselContentService
{
    public function __construct(CarouselContent $model)
    {
        parent::__construct($model);
    }

}
