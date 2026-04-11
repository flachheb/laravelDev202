<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profiles(){
        $profiles = Profile::paginate(12);
        return view('profile.index',compact('profiles'));
    }
    public function show(Profile $profile){
        // if($profile===NULL){
        //     return abort(403);
        // }

        return view('profile.show',compact('profile'));
       }
    public function create(){
        return view('profile.create');
    }
    public function store(Request $request){
        //Validation
        $formFields = $request->validate([
            'name'=>'required|between:5,20',
            'email'=>'required|email|unique:profiles',
            'password'=>'required|min:6|max:10|confirmed'
        ]);

        $formFields["password"] = Hash::make($request->password) ;
        // dd($formFields);
        //Insertion
        Profile::create($formFields);
        return redirect()->route('profile.index')->with("success","profile $request->name ajouter succeesfully");
    }
}
