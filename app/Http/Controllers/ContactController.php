<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mail\Contact;
use Mail;


class ContactController extends Controller
{
    public function Contacter()
    {

        return view('Contact');
    }

    

    public function contacterBD(Request $request)
    {
        Mail::to('amenibenslimen9@gmail.com')->send(new Contact($request->except('_token')));
        return redirect()->back()->with(['success' => 'Votre message est envoyer avec succées...']);  
    } 
} 
