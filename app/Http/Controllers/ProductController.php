<?php

namespace App\Http\Controllers;

use App\Service\ProductService;
use App\Service\Service;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(ProductService $service)
    {
        parent::__construct($service);
    }
}
