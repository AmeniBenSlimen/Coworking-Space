<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hotel Dashboard Template</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="assets/css/style.css"> </head>
<style>
    .example button {
  float: left;
  background-color: #4E3E55;
  color: white;
  border: none;
  box-shadow: none;
  font-size: 17px;
  font-weight: 500;
  font-weight: 600;
  border-radius: 3px;
  padding: 15px 35px;
  margin: 26px 5px 0 5px;
  cursor: pointer; 
}
.example button:focus{
  outline: none; 
}
.example button:hover{
  background-color: #33DE23; 
}
.example button:active{
  background-color: #81ccee; 
}
</style>
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
<form method="POST" action="{{route('AddProjetBD')}}" enctype="multipart/form-data">
    @csrf

 @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}  
</div><br />
@endif

<div class="col-md-4">
<div class="form-group">
<label>Date Début</label>
<input type="date" name="date_debut" id="date_debut" class="form-control" value="{{$projet->date_debut}}" required>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Date Fin</label>
<input type="date" name="date_fin" id="date_fin" class="form-control" value="{{$projet->date_fin}}"  required>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Intitulé</label>
<input type="text" name="intitule" id="intitule" class="form-control" value="{{$projet->intitule}}"  required>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<label>Description</label>
<textarea type="text" name="description" id="description" class="form-control" value="{{$projet->description}}" required></textarea>
</div>

  <input  type="submit" class="btn btn-primary" value="Modifier">
</div>
</form>
</div>
</div>
</div>
</div>

</div>


<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/datatables.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/raphael/raphael.min.js"></script>
	<script src="assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Voulez-vous vraiment supprimer cet membre ?`,
              text: "Si vous le supprimez, il disparaîtra pour toujours..",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>
</body>

</html>