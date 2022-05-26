
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
									<table class="table table-striped"  >
										<thead>
											<tr style="background-color:white">
												<th> ID</th>
												<th> Images </th>
												<th  colspan="2">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
                                                @foreach($image as $img)
												<td>{{$img->id}}</td>
                                                <td><img src="{{asset('images_projet/'.$img->url)}}" alt="" height="200px" width="200px"></td>
                           <td><a href="" class="btn btn-primary">Modifier</a></td>
                           <td><a class="btn btn-xs btn-danger" href="" >Supprimer</a> </td>
						   <td><a class="btn btn-xs btn-danger" style="background-color:#3BF911;border-color:#3BF911" href="" >Voir Images</a> </td>
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