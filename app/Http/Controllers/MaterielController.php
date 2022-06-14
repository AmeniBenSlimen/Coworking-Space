<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Space;
use App\Models\Materiel;
use Illuminate\Support\Facades\Gate;

class MaterielController extends Controller
{
    public function FormAddMateriel($id){
      
        $space=Space::where('id',$id)->first();
      
        return view('materiel.FormAddMateriel',compact('space'));
    }

    public function AddMaterielBD(Request $request){
       
        $materiel = new Materiel();
       
        $materiel->code_serie=$request->code_serie;
        $materiel->nom_m=$request->nom_m;
        $materiel->description=$request->description;
        $materiel->prix=$request->prix;
        $materiel->space_id=$request->space;
       
        $materiel->save();
       
        return redirect()->back()->with('success','Matériel Affecter avec success');
    }

    public function ListeMateriel(){
        
        $materiel=Materiel::all();
        return view('materiel.ListeMateriel',compact('materiel'));
    }

    public function FormeditMateriel($id){
        

        $materiel=Materiel::where('id',$id)->first();
        return view('materiel.FormeditMateriel',compact('materiel'));
    }

    public function UpdateMaterielBD(Request $request){
        $materiel=Materiel::where('id',$request->id)->first();
        $materiel->code_serie=$request->code_serie;
        $materiel->nom_m=$request->nom_m;
        $materiel->prix=$request->prix;
        $materiel->description=$request->description;
        $materiel->update();
       
        return redirect()->route('ListeMateriel')->with('success','Matériel Modifier avec success');
    
       }

       public function DeleteMaterielBD($id){
        
        $materiel=Materiel::where('id',$id)->first();
        $materiel->delete();
        return redirect()->route('ListeMateriel')->with('success','Matériel Supprimer avec success');
    }
}
