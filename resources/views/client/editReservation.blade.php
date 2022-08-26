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
<h3 class="page-title mt-5">Réserver</h3>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<form method="POST" action="{{route('UpdateReservation',$reservation->id)}}">
    @csrf

 @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}  
</div><br/>
@endif


<input type="hidden" class="form-control" name="space" value="{{$reservation->id}}" >

<input type="hidden" class="form-control" name="user" value="{{$reservation->id}}" >

<div class="row formtype">
<div class="col-md-4">
<div class="form-group">
<label>Nom</label>
<input type="text" class="form-control" name="nom" value="{{$reservation->nom}}" class="form-control @error('nom') is-invalid @enderror" required>
@error('nom')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Prénom</label>
<input id="prenom" type="text" class="form-control" name="prenom" value="{{$reservation->prenom}}" class="form-control @error('prenom') is-invalid @enderror" required>
@error('prenom')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Nmuéro de teléphone</label>
<input type="number" name="telephone"  id="telephone" class="form-control" value="{{$reservation->telephone}}"  class="form-control @error('telephone') is-invalid @enderror" required>
@error('telephone')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Email</label>
<input type="email" name="email"  id="email" class="form-control" value="{{$reservation->email}}" class="form-control @error('email') is-invalid @enderror" required>
@error('email')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Nom space</label>
<input type="text" name="nom_space" class="form-control"  value="{{$reservation->nom_space}}" class="form-control @error('nom_space') is-invalid @enderror" required>
@error('nom_space')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<label>Date entre</label>
<input type="datetime-local" name="date_entre" id="date_entre"   class="form-control @error('date_entre') is-invalid @enderror" value="" required autocomplete="date_entre" autofocus>{{$reservation->date_entre}}
@error('date_entre')
     <span class="invalid-feedback" role="alert">
     <strong>{{ $message }}</strong>
     </span>
@enderror
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<label>Date Sortie</label>
<input type="datetime-local" name="date_sorti" id="date_sorti" value="" class="form-control @error('date_sorti') is-invalid @enderror" required autocomplete="date_sorti" autofocus>{{$reservation->date_sorti}}
@error('date_sorti')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
</span>
 @enderror
</div>
</div>

<button type="submit" class="btn btn-primary buttonedit ml-2">Réserver</button>
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
