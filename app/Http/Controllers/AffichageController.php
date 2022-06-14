<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Space;
use App\Models\User;
use App\Models\Projet;
use App\Models\PhotoProjet;
use App\Models\Materiel;
use App\Models\Partenaire;
use App\Models\PhotoEspace;

class AffichageController extends Controller
{
    public function getSpace(){
        $space = Space :: all();
        
        
        $tab = array ();
        
        foreach ($space as $value){
            $img=PhotoEspace :: where('space_id', $value->id)->get()->toArray();
            $images=array();
        foreach($img as $image){
            $images[0]=$image['image_espace'];
     }
     $spaces=array(
        "id"=>$value->id,
        "nom_space"=>$value->nom_space,
        "description_space"=>$value->description_space,
        "created_at"=>$value->created_at,
        "images"=>$images
     );
     $tab[]=$spaces;
     $partenaire=Partenaire::all();
   
    } 
  // $image=PhotoEspace::limit(1)->get();
  
        return view('welcome',compact('tab','partenaire'));
    }

    public function DetailSpace($id){
        $image=PhotoEspace::where('space_id','=',$id)->get();
        $materiel=Materiel::where('space_id','=',$id)->get();
        $space=Space::where('id',$id)->first();
       
    return view('DetailSpace',compact('image','space','materiel'));
    }

   
        
    public function test(){
        return view('RecueMail');
    }

   public function viewProjet(){
    $projet = Projet :: all();
        
        
    $tab = array ();
    
    foreach ($projet as $value){
        $img=PhotoProjet :: where('projet_id', $value->id)->get()->toArray();
        $images=array();
    foreach($img as $image){
        $images[]=$image['url'];
 }
 $spaces=array(
    "id"=>$value->id,
    "date_debut"=>$value->date_debut,
    "date_fin"=>$value->date_fin,
    "intitule"=>$value->intitule,
    "description"=>$value->description,
    "images"=>$images
 );
 $tab[]=$spaces;
 

} 
       return view('viewProjet',compact('tab'));
   }
}
