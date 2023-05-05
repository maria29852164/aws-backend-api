<?php

namespace App\Http\Controllers;

use App\Service\Service;
use App\Service\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function __construct(UserService $service)
   {
       parent::__construct($service);
   }

}
