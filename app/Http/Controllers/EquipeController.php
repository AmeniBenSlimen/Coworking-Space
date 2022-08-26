<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;
use Illuminate\Support\Facades\Gate;

class EquipeController extends Controller
{
    
    
    public function FormEquipe(){
       
        return view ('user.AddEquipe');
    }

    public function AddEquipeBD(Request $request){
        $equipe = new Equipe();
        $equipe->nom_equipe=$request->nom_equipe;
        $equipe->prenom_equipe=$request->prenom_equipe;
        $equipe->description_equipe=$request->description_equipe;
        $equipe->image_equipe=$request->image_equipe;
        $equipe->specialite=$request->specialite;
        $equipe->telephone_equipe=$request->telephone_equipe;
        $equipe->user_id=$request->user;
        if ($request->hasfile('image_equipe'))
                {
                    $file=$request->file('image_equipe');
                    $ext=$file->getClientOriginalExtension();
                    $filename=time().'.'.$ext;
                    $file->move('images/', $filename);
                    $equipe->image_equipe=$filename;
                }
        $equipe->save();
        return redirect()->route('FormEquipe')->with('success', 'Membre Ajouter avec succèss');


    }

    public function viewEquipe(){

        $equipe = Equipe::all();
        return view('user.espaceEquipe',compact('equipe'));
    }

    public function ListeEquipe(){
       

        $equipe = Equipe :: all();
        return view('user.listeEquipe',compact('equipe'));
    }


    public function UpdateEquipe($id)
            {
                

                $equipe=Equipe::where('id',$id)->first();
                    
                return view('user.updateEquipeForm',compact('equipe'));
            }
               

        public function editEquipeBD(Request $request)
    {
        
            $equipe=Equipe::where('id',$request->id)->first();
            $equipe->nom_equipe=$request->nom_equipe;
            $equipe->prenom_equipe=$request->prenom_equipe;
            $equipe->specialite=$request->specialite;
            $equipe->description_equipe=$request->description_equipe;
            $equipe->image_equipe=$request->image_equipe;
            $equipe->telephone_equipe=$request->telephone_equipe;
            $equipe->user_id=$request->user;

            if ($request->hasfile('image_equipe'))
            {
                $file=$request->file('image_equipe');
                $ext=$file->getClientOriginalExtension();
                $filename=time().'.'.$ext;
                $file->move('images/', $filename);
                $equipe->image_equipe=$filename;
            }

            $equipe->update();
            
            return redirect()->back()->with('success', 'Membre Modifier avec succèss');

        }

        public function deleteMembreBD(Request $request)
        {
          

            $equipe=Equipe::where('id',$request->id)->first();
            $equipe->delete();
    
            return redirect()->route('ListeEquipe')->with('success', 'Membre Supprimer avec succèss');
    
        }


}
