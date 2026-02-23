<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Page Accueil
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Page Contact
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Page CGV
     */
    public function cgv()
    {
        return view('cgv');
    }
}
