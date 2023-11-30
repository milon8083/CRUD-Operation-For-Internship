<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('back-end.create');
    }
    public function home()
    {
        return view('back-end.home');
    }

}
