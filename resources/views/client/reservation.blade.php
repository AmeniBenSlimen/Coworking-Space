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
<form method="POST" action="{{route('AbonnementFormsBD')}}">
    @csrf

 @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}  
</div><br/>
@endif
<input type="hidden" class="form-control" name="space" value="{{$space->id}}" required>
<input type="hidden" class="form-control" name="user" value="{{$user->id}}" required>


<div class="row formtype">
<div class="col-md-4">
<div class="form-group">
<label>Nom</label>
<input type="text" disabled class="form-control" name="nom" value="{{$user->nom}}" required>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Prénom</label>
<input id="prenom" type="text" disabled class="form-control" name="prenom" value="{{$user->prenom}}" required>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Nmuéro de teléphone</label>
<input type="text" name="telephone" disabled id="telephone" class="form-control" value="{{$user->telephone}}" required>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Espace</label>
<input type="text" name="nom_space" disabled class="form-control" value="{{$space->nom_space}}" required>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Date Entrer</label>
<input type="datetime-local" name="date_enter" class="form-control" value="" required>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Date Sortie</label>
<input type="datetime-local" name="date_enter" class="form-control" value="" required>
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
