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
        return view('contact');
    }
     function cgv(){
        return view('cgv');
    }
}
