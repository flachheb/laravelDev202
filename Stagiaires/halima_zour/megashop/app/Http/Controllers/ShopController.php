<?php

namespace App\Http\Controllers;

class ShopController extends Controller
{
    public function index()
    {
        // Page d'accueil
        return view('index');
    }

    public function contact()
    {
        // Page contact
        return view('contact');
    }

    public function cgv()
    {
        // Page CGV
        return view('cgv');
    }
}
