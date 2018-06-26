<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){

        return 'Hola admin';

    }




}
