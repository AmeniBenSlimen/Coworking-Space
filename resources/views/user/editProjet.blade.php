

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
<h3 class="page-title mt-5">Ajouter un Projet</h3>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<form method="POST" action="{{route('UpdateProjet')}}" enctype="multipart/form-data">
    @csrf

    

 @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}  
</div><br />
@endif
@foreach($tab as $t)
<div class="col-md-4">
<div class="form-group">
<label>Date Début</label>
<input type="date" name="date_debut" id="date_debut" class="form-control @error('date_debut') is-invalid @enderror" required autocomplete="date_debut" value="{{$t['date_debut']}}" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Date Fin</label>
<input type="date" name="date_fin" id="date_fin" class="form-control @error('date_fin') is-invalid @enderror"  value="{{$t['date_fin']}}" required autocomplete="date_fin" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Intitulé</label>
<input type="text" name="intitule" id="intitule" class="form-control @error('intitule') is-invalid @enderror" value="{{$t['intitule']}}"  required autocomplete="intitule" autofocus>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<label>Description</label>
<textarea type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" required autocomplete="description" autofocus>{{$t['description']}}</textarea>
</div>
</div>
@foreach($t['images'] as $images)
              <img src="{{asset('images_projet/'.$images)}}" alt="" height="200px" width="200px">
                     @endforeach
<div class="form-group">
<label>Photo</label>
<input type="file" name="url[]" id="url" class="form-control @error('url') is-invalid @enderror"   required autocomplete="url" autofocus>
</div>
</div>
@endforeach
<!-- <div class="col-md-4">
<div class="form-group">
<label>Ajouter Photo</label>
<div class="custom-file mb-3">
<input type="file"  name="image_projet[]" class="form-control" 
                            placeholder="Choisissez une photo"  multiple required> </div> -->

  <input  type="submit" class="btn btn-primary" value="modifier">
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