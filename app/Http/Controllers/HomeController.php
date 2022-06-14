<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     //les vues aprés l'authentification

    public function index()
    {
        return view('home');
    }

    public function adminHome(){
        
        return view('user.AddUser');
    }
  
    public function membreHome(){
       
        return view('membreHome');
    }

    public function technicienHome(){
        
        return view('technicienHome');
    }

   

    
  
}