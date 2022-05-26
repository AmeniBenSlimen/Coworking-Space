

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Ajouter Membre</title>

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
<h3 class="page-title mt-5">Ajouter un utilisateur</h3>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<form method="POST" action="{{route('UpdateMaterielBD')}}">

 
@csrf
<input type="hidden" name="id" value="{{$materiel->id}}" />
<div class="col-md-4">
<div class="form-group">
<label>Code Série</label>
<input type="text" name="code_serie" class="form-control" value="{{$materiel->code_serie}}" required >
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Nom Matériel</label>
<input type="text" name="nom_m" class="form-control" value="{{$materiel->nom_m}}" required >
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Prix</label>
<input type="text" name="prix" class="form-control" value="{{$materiel->prix}}" required >
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Description </label>
<textarea name="description"  class="form-control" requireds>{{$materiel->description}}</textarea>
</div>
</div>
<button type="submit" class="btn btn-primary">Modifier</button>
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