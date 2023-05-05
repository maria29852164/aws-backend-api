<?php

namespace App\Http\Controllers;

use App\Models\SectionContent;
use App\Service\SectionContentService;
use App\Service\Service;
use Illuminate\Http\Request;

class SectionContentController extends Controller
{
    public function __construct(SectionContentService $service)
    {
        parent::__construct($service);
    }
}
