
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
<h3 class="page-title mt-5">Ajouter un Projet</h3>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<form method="POST" action="{{route('AddProjetBD')}}"enctype="multipart/form-data">
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
<label for="checkin-date">Date Début</label>
<input type="date" id="checkin-date" name="date_debut"  required>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="checkout-date">Date Fin</label>
<input type="date" name="date_fin" id="checkout-date"required>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Intitulé</label>
<input type="text" name="intitule" id="intitule" class="form-control @error('intitule') is-invalid @enderror" required autocomplete="intitule" autofocus>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<label>Description</label>
<textarea type="text" name="description_projet" id="description_projet" class="form-control @error('description_projet') is-invalid @enderror" required autocomplete="description_projet" autofocus></textarea>
</div>
</div>
<!-- <div class="col-md-4">
<div class="form-group">
<label>Ajouter Photo</label>
<div class="custom-file mb-3">
<input type="file"  name="image_projet[]" class="form-control" 
                            placeholder="Choisissez une photo"  multiple required> </div> -->
</div>
<button type="submit" class="btn btn-primary buttonedit ml-2">Suivant</button>
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
<script>
    var currentDateTime = new Date();
var year = currentDateTime.getFullYear();
var month = (currentDateTime.getMonth() + 1);
var date = (currentDateTime.getDate() + 1);

if(date < 10) {
  date = '0' + date;
}
if(month < 10) {
  month = '0' + month;
}

var dateTomorrow = year + "-" + month + "-" + date;
var checkinElem = document.querySelector("#checkin-date");
var checkoutElem = document.querySelector("#checkout-date");

checkinElem.setAttribute("min", dateTomorrow);

checkinElem.onchange = function () {
    checkoutElem.setAttribute("min", this.value);
}
</script>