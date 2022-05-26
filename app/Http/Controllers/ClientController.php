<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Abonnement;


class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function espaceClient(){
        return view ('client.espaceClient');
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
        $abonnement=Abonnement::all();
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

   
}
