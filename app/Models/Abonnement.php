<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Mail\AbonnementMail;
use Mail;
class Abonnement extends Model
{   use SoftDeletes;
    use HasFactory;
    protected $fillable=['nom','prenom','date_naissance','email','telephone','raison','date_validate','photo','etat'];


    public function sendMailAbonnement(){
        Mail::to('jendoubinedra221@gmail.com')->send(new AbonnementMail($this));
       
    
} 
}