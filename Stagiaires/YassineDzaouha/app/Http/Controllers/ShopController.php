<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    private function getSiteData()
    {
        require base_path('data.php'); // load your existing data.php file
        return compact('config', 'faq', 'cgv', 'categories', 'navigation');
    }

    function home()
    {
        $data = $this->getSiteData();
        return view('home', $data);
    }

    function contact()
    {
        $data = $this->getSiteData();
        return view('contact', $data);
    }

    function cgv()
    {
        $data = $this->getSiteData();
        return view('cgv', $data);
    }
}