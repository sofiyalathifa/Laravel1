<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('dasboard');
    }
}
