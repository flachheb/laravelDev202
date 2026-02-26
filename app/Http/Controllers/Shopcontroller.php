<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Shopcontroller extends Controller
{
    function contact(){
        require (base_path('app/Data/data.php'));
        return view('contact', ['data' => $config]); 
    }
    function cgv(){
        require (base_path('app/Data/data.php'));
        return view('cgv', ['data' => $cgv]); 
    }
}
