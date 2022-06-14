<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partenaire;

class PartenaireController extends Controller
{
    public function formPartenaire(){
        return view('user.formpart');
    }
    public function addPartenaireBD(Request $request){
        $partenaire=new Partenaire();
        $partenaire->nom=$request->nom;
        $partenaire->description=$request->description;
        $partenaire->photo=$request->photo;
        if ($request->hasfile('photo'))
        {
            $file=$request->file('photo');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('public/images', $filename);
            $partenaire->photo=$filename;
        }
        $partenaire->save();
        return redirect()->back()->with('success','ajout partenaire  effectue avec success');

    }
    public function listePartenaire(){
        $partenaire=Partenaire::all();
        return view('user.listePartenaire',compact('partenaire'));
    }
    public function EditPartenaire($id){
        $partenaire=Partenaire::where('id',$id)->first();
        return view('user.editPart',compact('partenaire'));

    }
    public function UpdatePartenaire(Request $request){
        $partenaire=Partenaire::where('id',$request->id)->first();
        $partenaire->nom=$request->nom;
        $partenaire->description=$request->description;
        $partenaire->photo=$request->photo;
        if ($request->hasfile('photo'))
        {
            $file=$request->file('photo');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('public/images', $filename);
            $partenaire->photo=$filename;
        }
        $partenaire->update();
        return redirect()->route('listePartenaire')->with('success','modification  effectue avec success');

    }
    public function DeletePartenaire($id){
        $partenaire=Partenaire::where('id',$id)->first();
        $partenaire->delete();
        return redirect()->route('listePartenaire')->with('ErrorMessage', 'partenaire supprimer avec succèss');
    }
    public function viewPartenaire(){

        $partenaire = Partenaire::all();
        return view('viewPartenaire',compact('partenaire'));
    }
}
