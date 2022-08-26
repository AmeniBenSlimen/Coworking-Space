<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>liste projet</title>
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
							<div class="mt-5">
								<h4 class="card-title float-left mt-2">Liste des projets</h4>
                                <a href="{{route ('FormProjet')}}" class="btn btn-primary float-right veiwbutton ">liste Projet</a>
                            </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
                                @if(session()->get('success'))
                    <div class="alert alert-success">
                    {{ session()->get('success') }}  
                    </div><br />
                   
                @endif
									<table class="table table-striped"  >
										<thead>
											<tr style="background-color:white">
												<th> ID</th>
												<th>Date debut </th>
												<th>Date fin</th>
												<th>Intitulé</th>
												<th>description</th>
												<th  colspan="2">Actions</th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($tab as $t)
                                       

											<tr>
												<td>{{$t['id']}}</td>
                                                <td>{{$t['date_debut']}}</td>
                                                <td>{{$t['date_fin']}}</td>
                                                <td>{{$t['intitule']}}</td>
												<td>{{$t['description']}}</td>

                 
                           <td><a href="{{route('FormeditProjet' ,$t['id'])}}" class="btn btn-primary">Modifier</a>
                           <a class="btn btn-xs btn-danger" href="{{route('DeletProjet',$t['id'])}}"  onclick="return confirm('vous etes sur de supprimer cet projet ?');">Supprimer</a> </td>
						   <td><a class="btn btn-xs btn-danger" style="background-color:#3BF911;border-color:#3BF911" href="{{route('ListeImageProjet',$t['id'])}}" >Voir Images</a> </td>
						   <td><ul><li><a href="{{route('AddPhotoProjet',$t['id'])}}">Ajouter Photo</a></li>
												
											</tr>
                                           
                                            @endforeach


										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
	</div>
	<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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