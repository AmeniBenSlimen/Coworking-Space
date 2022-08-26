<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Mail\ReservationMail;
use Mail;

class Reservation extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillabel=['nom','prenom','telephone','email','nom_space','date_entre','date_sorti','etat'];
    
    public function envoyerEmail(){
        Mail::to('jendoubinedra221@gmail.com')->send(new ReservationMail($this));
    }
}
