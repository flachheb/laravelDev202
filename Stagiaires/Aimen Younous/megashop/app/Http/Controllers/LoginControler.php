<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginControler extends Controller
{
    public function show(){
        return view('login.show');
    }

    public function login(Request $request){
        $credentials =['email'=>$request->email,'password'=>$request->password ];
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
             return to_route('accueil')->with("success","vous etes bien connecté ".$request->email);
        }else {
            return back()->withErrors([
                'email'=>'emails ou mots de passe incorrect'
            ])->onlyInput('email');
        };
    }
}
