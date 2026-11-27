<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        return view(view:'home');
    }

    public function dashboard()
    {
        return view(view:'dashboard');
    }
}
