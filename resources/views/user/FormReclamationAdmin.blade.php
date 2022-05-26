

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
<form method="POST" action="{{route('ReclamationAdminBD')}}">
    @csrf
    

 @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}  
</div><br />
@endif
 
<input type="hidden" name="user" value="{{$user->id}}">
<div class="col-md-4">
<div class="form-group">
<label>Nom</label>
<input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{$user->nom}}" required autocomplete="nom" autofocus>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<label>Code Série</label>
<input  type="text" class="form-control @error('code_serie') is-invalid @enderror" name="code_serie" value="{{ old('code_serie') }}" required autocomplete="code_serie" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Nom Matériel</label>
<input type="text" name="nom_materiel" class="form-control @error('nom_materiel') is-invalid @enderror" required autocomplete="nom_materiel" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Description Panne </label>
<textarea name="description_panne"  class="form-control @error('description_panne') is-invalid @enderror" required autocomplete="description_panne" autofocus></textarea>
</div>
</div>

<button type="submit" class="btn btn-primary">Ajouter</button>
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