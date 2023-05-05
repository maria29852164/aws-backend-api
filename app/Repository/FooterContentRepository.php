<?php

namespace App\Repository;

use App\Models\BaseModel;
use App\Models\FooterContent;
use App\Service\FooterContentService;

class FooterContentRepository extends Repository implements FooterContentService
{
  public function __construct(FooterContent $model)
  {
      parent::__construct($model);
  }
}
