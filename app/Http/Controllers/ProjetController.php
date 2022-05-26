<?php

namespace App\Http\Controllers;
use App\Models\Projet;
use App\Models\PhotoProjet;
use Illuminate\Support\Arr;

use Illuminate\Http\Request;

class ProjetController extends Controller
{
   
   public function __construct()
   {
       $this->middleware('auth');
   }
   
    public function FormProjet(){
        
        return view('user.FormProjet');
        
    }
    
    public function AddProjetBD(Request $request){
        $projet = new Projet();
        $projet->date_debut=$request->date_debut;
        $projet->date_fin=$request->date_fin;
        $projet->intitule=$request->intitule;
        $projet->description=$request->description;
        $projet->save();
       return view('user.addImageProjet',compact('projet'));    
    }
    public function addImageProjet(Request $request)
    {
         $request->validate([
            'url' => 'required'
       ]);
       if($request->hasfile("url")){

            foreach($request->file('url') as $file)
           {
            $name = $file->getClientOriginalName();
            $name=time().'.'.$name;
            $file->move('images_projet/', $name);  // move bech thezli l image w t7otheli f autre dossier
            $image = new PhotoProjet();
            $image->url = $name;
            $image->projet_id=$request->projet;
            $image->save();
          } 
        }
       return redirect()->route('FormProjet')->with('success', 'Projet Ajouter avec succèss');

    }
    public function listeProjet(){
        $pp = Projet :: all();
        $tab = array ();
        
        foreach ($pp as $value){
            $ii=PhotoProjet :: where('projet_id', $value->id)->get()->toArray();
            $images=array();
        foreach($ii as $image){
        $images[]=$image['url'];
     }
     $projet=array(
        "id"=>$value->id,
        "date_debut"=>$value->date_debut,
        "date_fin"=>$value->date_fin,
        "intitule"=>$value->intitule,
        "description"=>$value->description,
        "images"=>$images,
     );

     $tab[]=$projet;
    }
        return view('user.listeProjet',compact('tab'));

    
    }
   public function Editprojet($id){
   
    $projet=Projet::where('id',$id)->first();
    return view('user.FormeditProjet',compact('projet'));
}   
   public function UpdateProjet(Request $request){
    $projet=Projet::where('id',$request->id)->first();
    $image=PhotoProjet::where('id',$request->id)->first();
    $projet->date_debut=$request->date_debut;
    $projet->date_fin=$request->date_fin;
    $projet->intitule=$request->intitule;
    $projet->description=$request->description;
   
    
    if($request->hasfile("url")){

                        $file=$request->file('url');
                        $ext=$file->getClientOriginalName();
                        $filename=time().'.'.$ext;
                        $file->move('images_projet/', $filename);
                        $image->url=$filename;
                       
        
        
      
    }
    $projet->update();
    $image->update();
    return redirect()->route('listeProjet')->with('success','modification  effectue avec success');

   }

   public function ListeImageProjet($id){
    $projet=Projet::where('id',$id)->first();
    //$image=PhotoProjet::Join('projets')->select('url')->where('projets.id','=',DB::raw('photo_projets.projet_id'))->get();  
      dd($image);
    return view('user.ListeImageProjet',compact('projet','image'));
   }
   public function DeletProjet($id){
    $projet=Projet::where('id',$id)->first();
    $projet->delete();
    return redirect()->route('listeProjet')->with('success', 'Projet supprimer avec succèss');

   }
}
