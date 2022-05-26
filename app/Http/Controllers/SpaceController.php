<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Space;
use App\Models\PhotoEspace;
use Illuminate\Support\Facades\DB;

class SpaceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function FormAddSpace(){
        return view('user.FormAddSpace');
    }

    public function addSpaceBD(Request $request){
        $space=new Space();
        $space->nom_space=$request->nom_space;
        $space->description_space=$request->description_space;
        $space->save();

        return view('user.AddPhotoSpace',compact('space'));

    }

    public function AddPhotoSpaceBD (Request $request)
    {
         $request->validate([
            'image_espace' => 'required'
       ]);
       if($request->hasfile("image_espace")){

            foreach($request->file('image_espace') as $file)
           {
            $name = $file->getClientOriginalName();
            $name=time().'.'.$name;
            $file->move('images_espace/', $name);  // move bech thezli l image w t7otheli f autre dossier
            $image = new PhotoEspace();
            $image->image_espace = $name;
            $image->space_id=$request->space;
            $image->save();
          } 
        }
        return redirect()->route('FormAddSpace')->with('success','Espace  Ajouter avec success');

    }

    public function ListeSpace(){
        $space = Space :: all();
        $compteur = PhotoEspace::count('image_espace');
        
        $tab = array ();
        
        foreach ($space as $value){
            $img=PhotoEspace :: where('space_id', $value->id)->get()->toArray();
            $images=array();
        foreach($img as $image){
            $images[]=$image['image_espace'];
     }
     $spaces=array(
        "id"=>$value->id,
        "nom_space"=>$value->nom_space,
        "description_space"=>$value->description_space,
        "images"=>$images,
     );
     $tab[]=$spaces;
     
    } 
        return view ('user.ListeSpace',compact('tab','compteur'));
    }

    public function FormeditSpace($id){
        $space=Space::where('id',$id)->first();
        return view('user.FormeditSpace',compact('space'));
    }

    public function UpdateSpaceBD(Request $request){
        $space=Space::where('id',$request->id)->first();
        $image=PhotoEspace::where('id',$request->id)->first();
        $space->nom_space=$request->nom_space;
        $space->description_space=$request->description_space;
        $space->update();
       
        return redirect()->route('FormAddSpace')->with('success','Espace Modifier avec success');
    
       }
       
       public function DeleteSpaceBD($id){
           $space=Space::where('id',$id)->first();
           $space->delete();
           return redirect()->route('ListeSpace')->with('success','Espace Supprimer avec success');
       }


       public function VoirPhotoSpace($id){
           $image=PhotoEspace::where('space_id','=',$id)->get();
           $space=Space::where('id',$id)->first();
           return view ('user.VoirPhotoSpace',compact('image','space'));
       }

       public function FormEditPhotoSpace($id){
            $image=PhotoEspace::where('id',$id)->first();
            return view ('user.FormEditPhotoSpace',compact('image'));
       }

       public function UpdatePhotoSpaceBD(Request $request){
            $image=PhotoEspace::where('id',$request->id)->first();
        if($request->hasfile("image_espace")){
    
            $file=$request->file('image_espace');
            $ext=$file->getClientOriginalName();
            $filename=time().'.'.$ext;
            $file->move('images_espace/', $filename);
            $image->image_espace=$filename;
        }
            $image->update();
            return redirect()->route('ListeSpace')->with('success','Photo Modifier avec success');
       }

       public function DeletePhotoSpaceBD($id){
           $image=PhotoEspace::where('id',$id)->first();
           $image->delete();
           return redirect()->route('ListeSpace')->with('success','Espace Supprimer avec success');
       }

       public function AddPhotoSpace($id){
        $space=Space::where('id',$id)->first();
        return view('user.AddPhotoSpace',compact('space'));
    }
}


