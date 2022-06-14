<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth; 

class MembreController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function ProfileMembre($id){
        $membre = User::where('id',$id)->first();
        return view('Membre.ProfileMembre',compact('membre'));
       
    }

    public function FormUpdateProfileMembre($id){
        $membre = User::where('id',$id)->first();
       
        return view('membre.FormUpdateProfileMembre',compact('membre'));
       
    }

    public function updateProfileMembreBD(Request $request){
        
        $membre = User::where('id',$request->id)->first();
        $membre->nom=$request->nom;
        $membre->prenom=$request->prenom;
        $membre->date_naissance=$request->date_naissance;
        $membre->email=$request->email;
        $membre->telephone=$request->telephone;
        $membre->photo=$request->photo;
      
        if ($request->hasfile('photo'))
            {
                $file=$request->file('photo');
                $ext=$file->getClientOriginalExtension();
                $filename=time().'.'.$ext;
                $file->move('images/', $filename);
                $membre->photo=$filename;
            }

            $membre->update();
           
            return redirect()->back()->with('success', 'Profile Modifier avec succèss');;
    }

    public function FormUpdatePwMembre(){
        
       
        return view ('membre.FormUpdatePwMembre');
    }

    public function FormUpdatePwMembreBD(Request $request){
        
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
 
    
}
