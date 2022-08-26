<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Space;
use App\Models\User;
use App\Models\reservation;
use Illuminate\Support\Facades\Auth;


class ReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function FormReservation($id){
        $space=Space::where('id',$id)->first();
        $user=User::where('id',$id)->first();
        return view('FormReservation',compact('space','user'));
    }
  


    public function ReserverEspace(Request $request){
        $request->validate([
            'date_entre'=>['required','unique:reservations'],
            'date_sorti'=>['required','unique:reservations'],
        

        ]);
        $reservation= new Reservation();
      
        $reservation->nom=$request->nom;
        $reservation->prenom=$request->prenom;
        $reservation->telephone=$request->telephone;
        $reservation->email=$request->email;
        $reservation->nom_space=$request->nom_space;
        $reservation->date_entre=$request->date_entre;
        $reservation->date_sorti=$request->date_sorti;
        $reservation->etat=0;
        $reservation->space_id=$request->space;
        $reservation->user_id=$request->user;
    

        $reservation->save();
        $reservation->envoyerEmail();
        
        return redirect()->back()->with('success','reservation  effectue avec success');
        
    }
    public function listeReservation(){
        $reservation=Reservation::where('user_id',Auth::id())->get();
        return view ('client.consulterReservation',compact('reservation'));
    }

    public function listeReservationMembre(){
        $reservation=Reservation::where('user_id',Auth::id())->get();
        return view ('Membre.consulterReservation',compact('reservation'));
    }




    public function ListeDemandeR(){
        $reservation=Reservation::all();
        return view ('user.listeReservationA',compact('reservation'));

    }




    public function EditReservation($id){
        $reservation=Reservation::where('id',$id)->first();
        
        return view('client.editReservation',compact('reservation'));
    }


    public function UpdateReservation(Request $request){

        $request->validate([
            'date_entre'=>['required','unique:reservations'],
            'date_sorti'=>['required','unique:reservations'],
        

        ]);

        $reservation=Reservation::where('id',$request->id)->first();
       
        $reservation->nom=$request->nom;
        $reservation->prenom=$request->prenom;
        $reservation->telephone=$request->telephone;
        $reservation->email=$request->email;
        $reservation->nom_space=$request->nom_space;
        $reservation->date_entre=$request->date_entre;
        $reservation->date_sorti=$request->date_sorti;
        
        $reservation->update();
        return redirect()->route('listeReservation')->with('success','mise a jour  efectueé avec succes');
        

    }
public function DeleteReservationBD($id){
    $reservation=Reservation::where('id',$id)->first();
    $reservation->delete();
    return redirect()->back()->with('ErrorMessage', 'Reservation annuler');
}




public function destroyReservation($id)
{
    $reservation = Reservation::find($id);
    $reservation->delete();
    return redirect()->back();
}
public function ArchiveReservation()
{
    $reservation = Reservation::onlyTrashed()->get();
    return view('user.ArchiveReservation')->with('reservation',$reservation);
}

    public function attenteRE($id)
    {
         $reservation = Reservation::find($id);
         $reservation->etat = 1 ;
         $reservation->save();
         return redirect()->back();
     }
 



     public function accepterRE($id)
     {
         $reservation = Reservation::find($id);
         $reservation->etat = 2 ;
         $reservation->save();
         return redirect()->back();
      }
}
