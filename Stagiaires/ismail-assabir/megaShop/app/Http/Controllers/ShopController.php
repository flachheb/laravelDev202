<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    function index(){
        return view('index');
    }
     function contact(){
        require(base_path("Data/data.php"));
        return view('contact',["data"=> $config]);
    }
     function cgv(){
        require(base_path("Data/data.php"));
        return view('cgv',["cgv"=>$cgv]);
    }
}
