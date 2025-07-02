<?php

namespace App\Http\Controllers;

use App\Services\UserService;

class BaseController extends Controller
{
    public UserService $service;

    public function __construct(UserService  $service)
    {
        $this->service = $service;
    }
}
