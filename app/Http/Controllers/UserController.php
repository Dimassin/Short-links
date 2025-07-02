<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends BaseController
{
    public function redirect(Request $request, string $code)
    {
        return $this->service->redirect($request, $code);
    }
}
