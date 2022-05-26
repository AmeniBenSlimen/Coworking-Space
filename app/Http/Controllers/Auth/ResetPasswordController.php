<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function FormUpdatePw(){
        
       
        return view ('user.FormUpdatePw');
    }

   
        

    public function updatePwBD(Request $request){
        
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
                // The passwords matches
                return redirect()->back()->with("error","Votre mot de passe actuel ne correspond pas au mot de passe.");
            }
    
            if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
                // Current password and new password same
                return redirect()->back()->with("error","Votre mot de passe actuel ne correspond pas au mot de passe.");
            }
    
            $validatedData = $request->validate([
                'current-password' => 'required|current_password',
                'new-password' => 'required|string|min:8|confirmed',
            ]);
    
            //Change Password
            $user = Auth::user();
            $user->password = bcrypt($request->get('new-password'));
            $user->save();
            
    
            return redirect()->back()->with("success","Mot de passe changé avec succès!");
        
    }
}
