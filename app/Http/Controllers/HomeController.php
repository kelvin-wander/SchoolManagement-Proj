<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View 
    {
        $isHome=true;
        return view('pages.home', ['isHome'=>true]);
    }
    public function loginto():View
    {
        return view('auth.login');
    }
}
