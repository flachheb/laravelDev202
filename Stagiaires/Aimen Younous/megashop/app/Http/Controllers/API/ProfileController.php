<?php

namespace App\Http\Controllers\API;

use App\Models\Profile;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Http\Resources\ProfileResource;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Cache::remember('profiles',7000,function(){
            return  ProfileResource::collection(Profile::all());
        });
        // return response()->json(['success'=>true,'data'=>$profile],200); 
    }

    /**
     * Store a newly created resource in storage.
     */
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
        $profile = Profile::create($formFields);
        dd($profile);
        Cache::forget('profiles');

        return new ProfileResource($profile);
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        // return response()->json($profile);

        return new ProfileResource($profile);
    }

    /**
     * Update the specified resource in storage.
     */
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
        Cache::forget('profiles');

        return new ProfileResource($profile);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        $profile->delete();
        Cache::forget('profiles');
        return response()->json([
            'message'=>'Le Profile est bien supprimer',
            'id'=>$profile->id,
            'errors'=>[]
        ]);
    }
}
