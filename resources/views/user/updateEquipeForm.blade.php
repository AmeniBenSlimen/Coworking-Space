

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Membre</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/feathericon.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

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
</head>
<body>
	
@include('admin.header')
@include('admin.menu')
<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title mt-5">Edit Membre</h3>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<form method="POST" action="{{ route('editEquipeBD')}}">
    @csrf
	<input type="hidden" name="id" value="{{$equipe->id}}" />
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
<input id="nom_equipe" type="text" name="nom_equipe" class="form-control" value="{{$equipe->nom_equipe}}" required >
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Prénom</label>
<input id="prenom_equipe" type="text" name="prenom_equipe" value="{{$equipe->prenom_equipe}}" class="form-control" required>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Description</label>
<input id="description_equipe" type="text" name="description_equipe" value="{{$equipe->description_equipe}}" class="form-control" required>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Ajouter Photo</label>
<div class="custom-file mb-3">
<input id="image_equipe" type="file" name="image_equipe" value="{{$equipe->image_equipe}}" class="form-control" required>
</div>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Specialité</label>
<input id="specialite" type="text" name="specialite" value="{{$equipe->specialite}}" class="form-control" required>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Nmuéro de teléphone</label>
<input type="text" name="telephone_equipe" value="{{$equipe->telephone_equipe}}" class="form-control"required>
</div>
</div>
<button type="submit" class="btn btn-primary buttonedit ml-2">Modifier</button>
</div>
</form>
</div>
</div>
</div>
</div>

</div>


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
</body>
</html>