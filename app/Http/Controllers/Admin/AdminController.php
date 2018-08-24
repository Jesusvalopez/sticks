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

        asset("");
        return view('admin.index');

    }

    public function test(){

        return view('admin.layouts.test');

    }



}
