<!DOCTYPE html>
<html>
<head>
    <title>Contacter nous</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
 
</head>
<body>
@include('layouts.navbar')
   <br><br>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-8 offset-2 mt-5">
                <div class="card">
                    <div class="card-header" style="background-color:black">
                        <h3 class="text-white">Contacter</h3>
                    </div>
                    <div class="card-body">
                        
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                        @endif
                   
                        <form method="POST" action="{{route('contacterBD')}}">
                  
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Nom:</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Numéro de téléphone:</strong>
                                        <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Sujet:</strong>
                                        <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ old('subject') }}">
                                        @if ($errors->has('subject'))
                                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Message:</strong>
                                        <textarea name="message" rows="3" class="form-control" placeholder="Ecrire votre message ici...">{{ old('message') }}</textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>  
                                </div>
                            </div>
                   <br>
                            <div class="form-group text-center">
                                <button class="btn btn-success btn-submit">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</body>
<br><br>
@extends('layouts.footer')
</html>