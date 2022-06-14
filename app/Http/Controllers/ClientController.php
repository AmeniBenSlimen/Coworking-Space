<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Abonnement;
use Illuminate\Support\Facades\Hash;
use Auth;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function espaceClient(){
        return view ('client.espaceClient');
    }

    public function AcceuilClient(){
        return view('AcceuilClient');
    }
    public function AbonnementForms($id){
        $client = User::where('id',$id)->first();
        return view ('client.AbonnementForms',compact('client'));
    }

    public function AbonnementFormsBD(Request $request){
        $abonnement=new Abonnement();
        $abonnement->nom=$request->nom;
        $abonnement->prenom=$request->prenom;
        $abonnement->date_naissance=$request->date_naissance;
        $abonnement->email=$request->email;
        $abonnement->telephone=$request->telephone;
        $abonnement->photo=$request->photo;
        $abonnement->etat=0;
        $abonnement->user_id=$request->user;
        if($request->hasfile('photo')){
            $file=$request->file('photo');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('public/images/',$filename);
            $abonnement->photo=$filename;
        } 
        $abonnement->save();
        return redirect()->back()->with('success','demande envoyer avec succes');
    }

    public function ListeDemandeA($id){
        $abonnement=User::where('id',$id)->first();
        //dd($abonnement);
        return view('client.ConsulterDemandeA',compact('abonnement'));
    }
    

    public function editAbonnement($id){
        $abonnement=Abonnement::where('id',$id)->first();
        return view('client.editAbonnement',compact('abonnement'));
    }

    public function UpdateAbonnement(Request $request){
        $abonnement=Abonnement::where('id',$request->id)->first();
        
        $abonnement->nom=$request->nom;
        $abonnement->prenom=$request->prenom;
        $abonnement->date_naissance=$request->date_naissance;
        $abonnement->email=$request->email;
        $abonnement->telephone=$request->telephone;
        $abonnement->photo=$request->photo;
        $abonnement->user_id=$request->user;
        if($request->hasfile('photo')){
            $file=$request->file('photo');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('public/images/',$filename);
            $abonnement->photo=$filename;
        } 
        $abonnement->update();
        return redirect()->route('ConsulterDemandeA')->with('success','modification efectueé avec succes');

    }

    public function TelechargerDemande($id){
        $abonnement=User::where('id',$id)->first();
        return view('client.TelechargerDemande',compact('abonnement'));
        
    }

    ////////////////////////////Profile////////////////////////////////

    public function ProfileClient($id){
        $client = User::where('id',$id)->first();
       
        return view('client.ProfileClient',compact('client'));
       
    }

    public function FormUpdateProfileClient($id){
        $client = User::where('id',$id)->first();
       
        return view('client.FormUpdateProfileClient',compact('client'));
       
    }

    public function updateProfileClientBD(Request $request){
        
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
           
            return redirect()->back()->with('success', 'Profile Modifier avec succèss');;
    }

    public function FormUpdatePwClient(){
        
       
        return view ('client.FormUpdatePwClient');
    }

    public function FormUpdatePwClientBD(Request $request){
        
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
