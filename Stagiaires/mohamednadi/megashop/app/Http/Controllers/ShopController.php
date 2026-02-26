<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    
   public function index() {
    include(base_path('data.php'));
    $featured = getFeaturedProducts(); // Had l-function kayna aslan f data.php
    return view('pages.index', ['featured' => $featured]);
}
public function contact()
    {
        // Jib l-data mnn data.php bach t-affichi l-email w l-phone dyal l-company
        $data = include(base_path('data.php'));
        $config = $data['config'];

        return view('pages.contact', compact('config'));
    }
    public function cgv()
{
    $data = include(base_path('data.php'));
    $cgvData = $data['cgv']; // Jbed l-array dyal l-CGV

    return view('pages.cgv', ['cgv' => $cgvData]);
}
public function legal()
{
    return view('pages.legal');
}
}