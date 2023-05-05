<?php

namespace App\Http\Controllers;

use App\Service\FooterContentService;
use App\Service\Service;
use Illuminate\Http\Request;

class FooterContentController extends Controller
{
    public function __construct(FooterContentService $service)
    {
        parent::__construct($service);
    }
}
