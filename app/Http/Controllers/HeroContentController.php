<?php

namespace App\Http\Controllers;

use App\Service\HeroContentService;
use App\Service\Service;
use Illuminate\Http\Request;

class HeroContentController extends Controller
{
    public function __construct(HeroContentService $service)
    {
        parent::__construct($service);
    }
}
