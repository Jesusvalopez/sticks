<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class UserDashboardController extends BaseController
{

    public function __construct()
    {
        $this->middleware('auth');
    }



}