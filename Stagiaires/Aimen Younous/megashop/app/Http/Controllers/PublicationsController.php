<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Http\Controllers\Controller;
use App\Http\Requests\PublicationsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PublicationsController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publications =  Publication::latest()->get();
        return view('publications.index',compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('publications.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PublicationsRequest $request)
    {
        $formFields = $request->validated();
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('publications','public');
        };
        $formFields['profile_id']=Auth::id();
        Publication::create($formFields);

        return to_route('publications.index')->with("success","Publications ajouter succeesfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Publication $publications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publication $publication)
    {
        // if(Auth::id()!==$publication->profile_id){
        //     return abort(403);
        // }

        // if(!Gate::allows('update-publication',$publication)){
        //     return abort(403);
        // } 

        // Gate::authorize('update-publication',$publication);

        // Gate::authorize('update',$publication);

        $this->authorize('update',$publication);
        return view("publications.edit",compact("publication"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publication $publication)
    {
        // if(!Gate::allows('update-publication',$publication)){
        //     return abort(403);
        // } 

        Gate::authorize('update-publication',$publication);
        $request->validate([
            'titre'=>'required|min:5|max:150',
            'body'=>'required|min:20',
            'image'=>'image|mimes:png,jpg,jpeg,svg'
        ]);
        $publication->titre = $request->titre;
        $publication->body = $request->body;
        if($request->hasFile('image')){
            $publication->image = $request->file('image')->store('publications','public') ;
        }
        $publication->profile_id = Auth::id();
        $publication->save();
        return to_route('publications.index')->with('success','Publication Modifier avec success');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $publication)
    {
        // if(Auth::id()!==$publication->profile_id){
        //     return abort(403);
        // }

        // if(!Gate::allows('update-publication',$publication)){
        //     return abort(403);
        // } 

        Gate::authorize('update-publication',$publication);
        $publication->delete();
        return to_route('publications.index')->with('success','Publication Supprimer  success');
    }
}
