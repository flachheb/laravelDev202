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
        //storinf image
        if($request->hasFile('image')){
            $formFields["image"] = $request->file('image')->store('profiles','public') ;
        }
        //Hash password
        $formFields["password"] = Hash::make($request->password) ;
        // dd($formFields);
        //Insertion
        Profile::create($formFields);
        return redirect()->route('profiles.index')->with("success","profile $request->name ajouter succeesfully");
    }

    public function destroy(Profile $profile){
        $profile->delete();
        return to_route('profiles.index')->with('success',"Profile $profile->name est Supprimer ");
    }

    public function edit(Profile $profile){
        return view('profile.edit',compact('profile'));
    }

    public function update(Request $request,Profile $profile){
        $request->validate([
            'name' => 'required|between:5,20',
            'email' => 'required|email',
            'password_old' => 'nullable|required_with:password_new',
            'password_new' => 'nullable|min:6|confirmed',
            'image'=>'nullable|image|mimes:png,jpg,jpeg,svg'
        ]);
        $profile->name = $request->name;
        $profile->bio = $request->bio;
        if($request->filled('password_new')){
            if(!Hash::check($request->password_old,$profile->password)){
                return back()->withErrors([
                    'password_old' => 'Ancien mot de passe incorrect'
                ]);
            }
            $profile->password = Hash::make($request->password_new);
        }
        if($request->hasFile('image')){
            $profile->image = $request->file('image')->store('profiles','public') ;
        }
        $profile->save();
        return to_route('profiles.index')->with('success','Profile Modifier avec success');
    }

}
