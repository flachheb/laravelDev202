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
}
