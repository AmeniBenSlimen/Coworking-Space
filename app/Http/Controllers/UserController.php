<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
       /*  if(!( Auth::user()->role === 'admin')){
            return view('erreur');
        } */
    }
    
   
    
    public function equipe(){
        
        return view('equipe.espaceEquipe');
    }
    
    public function addUser(){
        return view ('user.AddUser');
    }

    

    public function addUserBD(Request $request){
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'date_naissance' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telephone' => ['required', 'integer', 'min:8'],
            'role' => ['string', 'max:255'],
            'photo' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        User::create([
            'nom' => $request['nom'],
            'prenom' => $request['prenom'],
            'date_naissance' => $request['date_naissance'],
            'email' => $request['email'],
            'telephone' => $request['telephone'],
            'role' => $request['role'],
            'photo' => $request['photo'],
            'password' => Hash::make($request['password']),
        ]);
        
        return redirect()->route('addUser')->with('success', 'Utilisteur Ajouter avec succèss');
    }

    
    public function ListeUserAdmin(){
       
        $admin = User::where('role','=','admin')->get();
        return view('user.ListeUserAdmin',compact('admin'));
    }



    public function FormeditAdmin($id){
        $admin=User::where('id',$id)->first();
        return view ('user.FormeditAdmin',compact('admin'));
    }


   
               
   
    
    
    public function ProfileAdmin($id){
        $admin = User::where('id',$id)->first();
       
        return view('user.ProfileAdmin',compact('admin'));
       
    }

    public function updateProfileUserBD (Request $request){
        
        $admin = User::where('id',$request->id)->first();
        $admin->nom=$request->nom;
        $admin->prenom=$request->prenom;
        $admin->date_naissance=$request->date_naissance;
        $admin->email=$request->email;
        $admin->telephone=$request->telephone;
        $admin->photo=$request->photo;
      
        if ($request->hasfile('photo'))
            {
                $file=$request->file('photo');
                $ext=$file->getClientOriginalExtension();
                $filename=time().'.'.$ext;
                $file->move('images/', $filename);
                $admin->photo=$filename;
            }

            $admin->update();
            
            return redirect()->route('ProfileAdmin')->with('success', 'Profile Modifier avec succèss');;
    }


    ////////////////////////////Technicien///////////////////////////////

    public function ListeTechnicien(){
        $technicien=User::where('role','=','technicien')->get();
        return view ('user.ListeTechnicien',compact('technicien'));
    }

    public function FormeditTechnicien($id){
        $technicien = User :: where ('id',$id)->first();
        return view('user.FormeditTechnicien',compact('technicien'));
    }

    public function FormeditTechnicienBD(Request $request){
        $technicien = User::where('id',$request->id)->first();
        $technicien->nom=$request->nom;
        $technicien->prenom=$request->prenom;
        $technicien->date_naissance=$request->date_naissance;
        $technicien->email=$request->email;
        $technicien->telephone=$request->telephone;
      
        if ($request->hasfile('photo'))
            {
                $file=$request->file('photo');
                $ext=$file->getClientOriginalExtension();
                $filename=time().'.'.$ext;
                $file->move('images/', $filename);
                $technicien->photo=$filename;
            }

            $technicien->update();
            
            return redirect()->route('ListeTechnicien')->with('success', 'Technicien Modifier avec succèss');


    }

    public function DeleteTechnicien(Request $request){
        $technicien=User::where('id', $request->id)->first();
        $technicien->delete();
        return redirect()->route('ListeTechnicien')->with('success', 'Technicien Supprimer avec succèss');

    }


    ////////////////////////////Client///////////////////////////////

    public function ListeClient(){
        $client=User::where('role','=','client')->get();
        return view('user.ListeClient',compact('client'));
    }

    public function FormeditClient($id){
        $client=User:: where('id',$id)->first();
        return view('user.FormeditClient',compact('client'));
    }

    public function FormeditClientBD(Request $request){
        $client = User::where('id',$request->id)->first();
        $client->nom=$request->nom;
        $client->prenom=$request->prenom;
        $client->date_naissance=$request->date_naissance;
        $client->email=$request->email;
        $client->telephone=$request->telephone;
      
        if ($request->hasfile('photo'))
            {
                $file=$request->file('photo');
                $ext=$file->getClientOriginalExtension();
                $filename=time().'.'.$ext;
                $file->move('images/', $filename);
                $client->photo=$filename;
            }

            $client->update();
            
            return redirect()->route('ListeClient')->with('success', 'Client Modifier avec succèss');


    }

    public function DeleteClient(Request $request){
        $client=User::where('id', $request->id)->first();
        $client->delete();
        return redirect()->route('ListeClient')->with('errors', 'Client Supprimer avec succèss');

    }

   
}
