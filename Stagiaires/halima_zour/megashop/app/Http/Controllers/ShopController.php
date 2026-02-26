<?php

namespace App\Http\Controllers;

class ShopController extends Controller
{
    public function index()
    {
        // Page d'accueil
        return view('index');
    }

  public function cgv()
{
    $sections = config('data.cgv');
    return view('cgv', compact('sections'));
}

public function contact()
{
    $contact = config('data.contact');
    return view('contact', compact('contact'));
}
}
