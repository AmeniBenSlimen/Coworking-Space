<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }
    public function welcome(){
        return view('welcome');
    }

    public function viewEquipe(){
        return view('user.espaceEquipe');
    }
}