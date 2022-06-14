<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Espace Client</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/feathericon.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
@include('client.header')
@include('client.menu')

<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title mt-5">Ajouter un utilisateur</h3>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<form method="POST" action="{{route('AbonnementFormsBD')}}">
    @csrf
<input type="hidden" name="user" value="{{$client->id}}">
 @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}  
</div><br/>
@endif
 
<div class="row formtype">
<div class="col-md-4">
<div class="form-group">
<label>Nom</label>
<input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{$client->nom}}" required autocomplete="nom" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Prénom</label>
<input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{$client->prenom}}" required autocomplete="prenom" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Date Naissance</label>
<input type="date" name="date_naissance" id="date_naissance" class="form-control @error('date_naissance') is-invalid @enderror" value="{{$client->date_naissance}}" required autocomplete="date_naissance" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Adresse Mail</label>
<input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{$client->email}}" required autocomplete="email" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Nmuéro de teléphone</label>
<input type="telephone" name="telephone" id="telephone" class="form-control @error('telephone') is-invalid @enderror" value="{{$client->telephone}}" required autocomplete="telephone" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Ajouter Photo</label>
<div class="custom-file mb-3">
<input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}"  autocomplete="photo" autofocus>
</div>
</div>
</div>
<button type="submit" class="btn btn-primary buttonedit ml-2">Valider</button>
</div>
</form>

<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/moment.min.js')}}"></script>
<script src="{{asset('assets/js/select2.min.js')}}"></script>

<script src="{{asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>

<script src="{{asset('assets/js/script.js')}}"></script>
<script>
		$(function () {
			$('#datetimepicker3').datetimepicker({
				format: 'LT'

			});
		});
	</script>
