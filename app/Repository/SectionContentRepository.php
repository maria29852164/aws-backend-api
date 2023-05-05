<?php

namespace App\Repository;

use App\Models\BaseModel;
use App\Models\SectionContent;
use App\Service\SectionContentService;

class SectionContentRepository extends Repository implements SectionContentService
{
    public function __construct(SectionContent $model)
    {
        parent::__construct($model);
    }

}
