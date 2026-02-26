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
    $contact = config('data.contact');
    return view('contact', compact('contact'));
}

    // Page CGV
 public function cgv()
{
    $sections = config('data.cgv');
    return view('cgv', compact('sections'));
}
}