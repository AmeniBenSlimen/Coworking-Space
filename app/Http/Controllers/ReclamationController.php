<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Materiel;
use App\Models\Reclamation;
use Illuminate\Support\Facades\Gate;

class ReclamationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function FormReclamationAdmin($id){
        
        $user=User::where('id',$id)->first();
        $materiel=Materiel::where('id',$id)->first();
        return view ('user.FormReclamationAdmin',compact('user','materiel'));
    }


    public function ReclamationAdminBD(Request $request){
         $reclamation= new Reclamation();
         $reclamation->nom=$request->nom;
         $reclamation->code_serie=$request->code_serie;
         $reclamation->nom_materiel=$request->nom_materiel;
         $reclamation->description_panne=$request->description_panne;
         $reclamation->user_id=$request->user;
         $reclamation->materiel_id=$request->materiel;
         $reclamation->etat=0;
         $reclamation->save();

         return redirect()->back()->with('success','Demande Réclamation envoyer  avec success');
    }

    public function ListeReclamation(){
        
        $reclamation=Reclamation::all();
        return view('user.ListeReclamation',compact('reclamation'));
    }

    public function editReclamation($id){
       
        $reclamation=Reclamation::findorFail($id);
        return view('user.editReclamation',compact('reclamation'));
    }

    public function UpdateReclamationBD(Request $request){
        $reclamation=Reclamation::where('id',$request->id)->first();
        $reclamation->nom=$request->nom;
        $reclamation->code_serie=$request->code_serie;
        $reclamation->nom_materiel=$request->nom_materiel;
        $reclamation->description_panne=$request->description_panne;
        $reclamation->update();
        return redirect()->route('ListeReclamation')->with('success','Votre Demande Modifier avec success');

    }

    public function deleteReclamationBD($id)
    {
       $reclamation = Reclamation::withTrashed()->where('id', $id)->first();
       $reclamation->forceDelete();
       return redirect()->route('ListeReclamation')->with('ErrorMessage','Réclamation supprimer  avec success');
    }


    
    public function ListeReclamationTechnicien(){
        
        $reclamation=Reclamation::all();
        return view('technicien.ListeReclamationTechnicien',compact('reclamation'));
    }

    public function attente($id)
   {
    
        $reclamation = Reclamation::find($id);
        $reclamation->etat = 1 ;
        $reclamation->save();
        return redirect()->back();
    }

    public function accepter($id)
    {
        
        $reclamation = Reclamation::find($id);
        $reclamation->etat = 2 ;
        $reclamation->save();
        return redirect()->back();
     }
     public function destroyReclamation($id)
     {
        
        $reclamation = Reclamation::find($id);
        $reclamation->delete();
        return redirect()->back();
     } 
     public function Archive()
     {
       
         $reclamation = Reclamation::onlyTrashed()->get();
         return view('technicien.Archive')->with('reclamation',$reclamation);
     }
}
