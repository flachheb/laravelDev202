<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

use function Pest\Laravel\patch;

class FileController extends Controller
{
    public function download(Profile $profile){
        // dd($profile->image);
        return response()->download("storage/$profile->image",'profile_',[]);
        // response()->download(storage_path('app/public/storage/profiles/'));
    }
}
