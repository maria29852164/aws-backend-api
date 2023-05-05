<?php

namespace App\Repository;

use App\Models\BaseModel;
use App\Models\HeroContent;
use App\Service\HeroContentService;

class HeroContentRepository extends Repository implements HeroContentService
{
   public function __construct(HeroContent $model)
   {
       parent::__construct($model);
   }
}
