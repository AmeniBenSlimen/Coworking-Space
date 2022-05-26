
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
<h3 class="page-title mt-5">Ajouter Membre</h3>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<form method="POST" action="{{ route('AddEquipeBD') }}">
    @csrf
	<input type="hidden" value="{{Auth::user()->id}}" name="user">

 @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}  
</div><br />
@endif
 
<div class="row formtype">
<div class="col-md-4">
<div class="form-group">
<label>Nom</label>
<input id="nom_equipe" type="text" class="form-control @error('nom_equipe') is-invalid @enderror" name="nom_equipe" value="{{ old('nom_equipe') }}" required autocomplete="nom_equipe" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Prénom</label>
<input id="prenom_equipe" type="text" class="form-control @error('prenom_equipe') is-invalid @enderror" name="prenom_equipe" value="{{ old('prenom_equipe') }}" required autocomplete="prenom_equipe" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Description </label>
<input type="text" name="description_equipe" class="form-control @error('description_equipe') is-invalid @enderror" required autocomplete="description_equipe" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Ajouter Photo</label>
<div class="custom-file mb-3">
<input id="image_equipe" type="file" class="form-control @error('image_equipe') is-invalid @enderror" name="image_equipe" value="{{ old('image_equipe') }}" required autocomplete="image_equipe" autofocus>
</div>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Specialité</label>
<input id="specialite" type="text" class="form-control @error('specialite') is-invalid @enderror" name="specialite" value="{{ old('specialite') }}" required autocomplete="specialite" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Nmuéro de teléphone</label>
<input type="text" name="telephone_equipe"  class="form-control @error('telephone_equipe') is-invalid @enderror" required autocomplete="telephone_equipe" autofocus>
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