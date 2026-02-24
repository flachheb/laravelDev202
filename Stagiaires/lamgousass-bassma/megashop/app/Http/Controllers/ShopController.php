<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    // Page d'accueil
    public function index()
    {
        return view('index');
    }

    // Page Contact
    public function contact()
    {
        return view('contact');
    }

    // Page CGV
    public function cgv()
    {
        return view('cgv');
    }
}