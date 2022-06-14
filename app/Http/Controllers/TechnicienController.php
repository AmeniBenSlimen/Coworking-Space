<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TechnicienController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function ProfileTechnicien($id){
        $technicien = User::where('id',$id)->first();
       
        return view('technicien.ProfileTechnicien',compact('technicien'));
       
    }
    public function FormUpdateProfileTechnicien($id){
        $technicien = User::where('id',$id)->first();
       
        return view('technicien.FormUpdateProfileTechnicien',compact('technicien'));
       
    }
    public function updateProfileTechnicienBD(Request $request){
        
        $technicien = User::where('id',$request->id)->first();
        $technicien->nom=$request->nom;
        $technicien->prenom=$request->prenom;
        $technicien->date_naissance=$request->date_naissance;
        $technicien->email=$request->email;
        $technicien->telephone=$request->telephone;
        $technicien->photo=$request->photo;
      
        if ($request->hasfile('photo'))
            {
                $file=$request->file('photo');
                $ext=$file->getClientOriginalExtension();
                $filename=time().'.'.$ext;
                $file->move('images/', $filename);
                $technicien->photo=$filename;
            }

            $technicien->update();
           
            return redirect()->back()->with('success', 'Profile Modifier avec succèss');;
    }

    public function FormUpdatePwTechnicien(){
        
       
        return view ('technicien.FormUpdatePwTechnicien');
    }

    public function FormUpdatePwTechnicienBD(Request $request){
        
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
                // The passwords matches
                return redirect()->back()->with("error","Votre mot de passe actuel ne correspond pas au mot de passe.");
            }
    
            if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
                // Current password and new password same
                return redirect()->back()->with("error","Votre mot de passe actuel ne correspond pas au mot de passe.");
            }
    
            $validatedData = $request->validate([
                'current-password' => 'required|current_password',
                'new-password' => 'required|string|min:8|confirmed',
            ]);
    
            //Change Password
            $user = Auth::user();
            $user->password = bcrypt($request->get('new-password'));
            $user->save();
            
    
            return redirect()->back()->with("success","Mot de passe changé avec succès!");
        
    }

    public function listeReservationTechnicien(){
        $resrvation=Reservation::where('user_id',Auth::id())->get();
       
        return view('technicien.ListeReservationTechnicien',compact('resrvation'));
    }
}
