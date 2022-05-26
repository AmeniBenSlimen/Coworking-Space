
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Ajouter Membre</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">

<link rel="stylesheet" href="assets/css/feathericon.min.css">
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

@include('admin.header')
		@include('admin.menu')
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
<form method="POST" action="{{ route('addUserBD') }}">
    @csrf

 @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}  
</div><br />
@endif
 
<div class="row formtype">
<div class="col-md-4">
<div class="form-group">
<label>Nom</label>
<input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Prénom</label>
<input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Date Naissance</label>
<input type="date" name="date_naissance" id="date_naissance" class="form-control @error('date_naissance') is-invalid @enderror" required autocomplete="date_naissance" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Adresse Mail</label>
<input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required autocomplete="email" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Nmuéro de teléphone</label>
<input type="telephone" name="telephone" id="telephone" class="form-control @error('telephone') is-invalid @enderror" required autocomplete="telephone" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Role</label>
<select class="form-control" id="sel1" name="role">
<option>Client</option>
<option>Technicien</option>
<option>Membre</option>
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
<div class="col-md-4">
<div class="form-group">
<label>Mot de passe </label>
<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Confirmer Mot de passe </label>
<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
</div>
</div>
<button type="submit" class="btn btn-primary buttonedit ml-2">Ajouter</button>
</div>
</form>
</div>
</div>


</div>
</div>

</div>


<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/select2.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/raphael/raphael.min.js"></script>

<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/script.js"></script>
<script>
		$(function () {
			$('#datetimepicker3').datetimepicker({
				format: 'LT'

			});
		});
	</script>
</body>
</html>