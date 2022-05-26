<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Space;
use App\Models\User;

class ReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function FormReservation($id){
        $space=Space::where('id',$id)->first();
        $user=User::where('id',$id)->first();
       return view ('client.reservation',compact('space','user'));
    }


    public function Reserver(Request $request){
        
    }
}
