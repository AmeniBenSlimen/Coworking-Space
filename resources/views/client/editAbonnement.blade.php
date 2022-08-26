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
<h3 class="page-title mt-5">Editer Demande</h3>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<form method="POST" action="{{route('UpdateAbonnement' , $abonnement->id)}}">
    @csrf
	<input type="hidden" name="user" value="{{$abonnement->user_id}}" />
 @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}  
</div><br/>
@endif
 

<div class="col-md-4">
<div class="form-group">
<p><img  class="avatar-img rounded-circle" src="{{asset('images/'. $abonnement->photo)}}" alt="" height="150px" width="150px" style="margin-left:150px" ></p>
<label>Nom</label>
<input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{$abonnement->nom}}" required autocomplete="nom" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Prénom</label>
<input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{$abonnement->prenom}}" required autocomplete="prenom" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Date Naissance</label>
<input type="date" name="date_naissance" id="date_naissance" class="form-control @error('date_naissance') is-invalid @enderror" value="{{$abonnement->date_naissance}}" required autocomplete="date_naissance" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Adresse Mail</label>
<input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{$abonnement->email}}" required autocomplete="email" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Nmuéro de teléphone</label>
<input type="telephone" name="telephone" id="telephone" class="form-control @error('telephone') is-invalid @enderror" value="{{$abonnement->telephone}}" required autocomplete="telephone" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Raison</label>
<input type="text" name="raison" id="telephone" class="form-control @error('raison') is-invalid @enderror" value="{{$abonnement->raison}}" required autocomplete="telephone" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Date validate</label>
<select name="date_validate"    class="form-control">
<option value="" select>{{$abonnement->date_validate}}</option>
	<option value="1 mois" name="date_validate" value="{{$abonnement->date_validate}}" >1 mois </option>
	<option value="2 mois" name="date_validate"  value="{{$abonnement->date_validate}}">2 mois</option>
	<option value="3 mois" name="date_validate" value="{{$abonnement->date_validate}}" >3 mois</option>
	<option value="4 mois" name="date_validate" value="{{$abonnement->date_validate}}" >4 mois</option>
	<option value="5 mois" name="date_validate" value="{{$abonnement->date_validate}}">5 mois</option>
	<option value="6 mois" name="date_validate"value="{{$abonnement->date_validate}}" >6 mois</option>
	<option value="7 mois" name="date_validate" value="{{$abonnement->date_validate}}">7 mois</option>
	<option value="8 mois" name="date_validate" value="{{$abonnement->date_validate}}" >8 mois</option>
	<option value="9 mois"name="date_validate" value="{{$abonnement->date_validate}}"> 9 mois</option>
	<option value="10 mois"name="date_validate" value="{{$abonnement->date_validate}}">10 mois</option>
	<option value="11 mois"name="date_validate" value="{{$abonnement->date_validate}}">11 mois</option>
	<option value="12 mois"name="date_validate" value="{{$abonnement->date_validate}}">12 mois</option>
</select>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Ajouter Photo</label>
<div class="custom-file mb-3">
<input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" required autocomplete="photo" autofocus>
</div>
</div>
</div>
<button type="submit" class="btn btn-primary">Valider</button>
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
