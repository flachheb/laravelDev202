<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
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
    public function store(ProfileRequest $request){
        
        //Validation
        $formFields = $request->validated();

        $formFields["password"] = Hash::make($request->password) ;
        // dd($formFields);
        //Insertion
        Profile::create($formFields);
        return redirect()->route('profile.index')->with("success","profile $request->name ajouter succeesfully");
    }
}
