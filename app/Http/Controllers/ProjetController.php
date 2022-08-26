<?php

namespace App\Http\Controllers;
use App\Models\Projet;
use App\Models\PhotoProjet;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Gate;
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
       return redirect()->back()->with('success', 'Image Ajouter avec succèss');

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
    dd($projet);
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
    return redirect()->back()->with('success','modification  effectue avec success');

   }

   
   public function ListeImageProjet($id){
    
    $projet=Projet::where('id',$id)->first();
    $image=PhotoProjet::where('projet_id',$id)->get();
    return view('user.ListeImageProjet',compact('projet','image'));
   }

   public function AddPhotoProjet($id){
    $projet=Projet::where('id',$id)->first();
    return view('user.addImageProjet',compact('projet'));
   }
   public function DeletProjet($id){
   
    $projet=Projet::where('id',$id)->first();
    $projet->delete();
    return redirect()->route('listeProjet')->with('success', 'Projet supprimer avec succèss');

   }

   public function FormEditPhotoProjet($id){
    $image=PhotoProjet::where('id',$id)->first();
    return view ('user.FormEditPhotoProjet',compact('image'));
}

public function UpdatePhotoProjetBD(Request $request){
    $image=PhotoProjet::where('id',$request->id)->first();
if($request->hasfile("url")){

    $file=$request->file('url');
    $ext=$file->getClientOriginalName();
    $filename=time().'.'.$ext;
    $file->move('images_projet/', $filename);
    $image->url=$filename;
}
    $image->update();
    return redirect()->back()->with('success','Photo Modifier avec success');
}

public function DeletImageProjet($id){
   
    $image=PhotoProjet::where('id',$id)->first();
    $image->delete();
    return redirect()->back()->with('success', 'Image supprimer avec succèss');
}
}
