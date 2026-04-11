<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profiles(){
        $profiles = Profile::paginate(12);
        return view('profile.index',compact('profiles'));
    }
    public function show(Request $request){
        $id = $request->id;
        $profile = Profile::findOrFail($id);
        // if($profile===NULL){
        //     return abort(403);
        // }
        return view('profile.show',compact('profile'));
       }
    public function create(){
        return view('profile.create');
    }
    public function store(Request $request){
        $name = $request->name;
        $email = $request->email;
        $bio = $request->bio;
        $password = $request->password;
        $image = $request->image;
        //Validation
        //Insertion
        Profile::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'bio'=>$request->bio,
            'image'=>$request->image,
        ]);
        return redirect()->route('profile.index')->with("success","profile $request->name ajouter succeesfully");
    }
}
