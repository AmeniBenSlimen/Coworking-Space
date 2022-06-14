<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class TestMail extends Controller
{

    public function Contacter()
    {

        return view('emails.Contact');
    }
   
    public function contacterBD(Request $request)
    {  $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'subject'=>'required',
        'message'=>'required'
    ]);
    if($this->isOnline()){
        $mail_data=[
            'recipient'=>'amenibenslimen9@gmail.com',
            'fromEmail'=>$request->email,
            'fromName'=>$request->name,
            'subject'=>$request->subject,
            'body'=>$request->message,
        ];
        Mail::send('emails.testmail',$mail_data,function($message)use($mail_data){
            $message->to($mail_data['recipient'])
                    ->from($mail_data['fromEmail'],$mail_data['fromName'])
                    ->subject($mail_data['subject']);
        });
        return redirect()->back()->with('success','email envoyer avec success');
    }
    else{
        return "no connection";
    }
 } 

    public function isOnline($site ="https://youtube.com/"){
        if(@fopen($site,"r")){
            return true;
        }
        else{
            return false;
        }
    }
}
