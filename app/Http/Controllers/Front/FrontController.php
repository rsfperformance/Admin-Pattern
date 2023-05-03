<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class FrontController extends BaseController
{
    public function index()
    {
        return view('front.welcome');
    }
}
