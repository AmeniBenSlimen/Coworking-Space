<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MembreController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function ProfileMembre($id){
        $user = User::where('id',$id)->first();
        return view('Membre.ProfileMembre',compact('user'));
       
    }

 
    
}
