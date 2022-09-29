<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function uploadImage(Request $request)
    {
     

        if($request->hasFile('image')){
            User::uploadImage($request->image);
            return redirect()->back()->with('message', 'image uploaded');
        }
        return redirect()->back()->with('error', 'image failed to upload');
    }

    public function home(){
    

 $user = User::all();
return $user;
        //return view('welcome');
    }
}
