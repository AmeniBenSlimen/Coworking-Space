<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abonnement;
class AbonnementController extends Controller
{

  
      public function __construct()
    {
        $this->middleware('auth');
    }
    public function ListeAbonnement(){
        $abonnement=Abonnement::All();
        //dd($abonnement);
        return view('user.ListeAbonnement',compact('abonnement'));
    }

    public function attenteAb($id)
   {
        $abonnement = Abonnement::find($id);
        $abonnement->etat = 1 ;
        $abonnement->save();
        return redirect()->back();
    }

    public function accepterAb($id)
    {
        $abonnement = Abonnement::find($id);
        $abonnement->etat = 2 ;
        $abonnement->save();
        return redirect()->back();
     }

     public function supprimerAb($id)
     {
         $abonnement = Abonnement::find($id);
         $abonnement->etat = 3;
         $abonnement->save();
         return redirect()->back();
      }

     public function destroyAbonnement($id)
     {
        $abonnement = Abonnement::find($id);
        $abonnement->delete();
        return redirect()->back();
     } 

     public function ArchiveAbonnement()
     {
         $abonnement = Abonnement::onlyTrashed()->get();
         return view('user.ArchiveAbonnement')->with('abonnement',$abonnement);
     }
}
