


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title></title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/feathericon.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
		@include('admin.header')
		@include('admin.menu')
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2">Archive</h4>
                
                                
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

                @if(Session::has('ErrorMessage'))


    <div class="alert alert-danger text-center">
        <strong></strong> {{Session::get('ErrorMessage')}}
    </div>


@endif 
                
<table class="table table-striped"  >
										<thead>
											<tr style="background-color:white">
												<th>ID</th>
												<th>Nom </th>
												<th>Prenom</th>
												<th>Telephone</th>
                        <th> Email</th>
                        <th>Nom space</th>
                        <th>Date entre</th>
                        <th>Date sorti</th>
                        <th>Supprimer le</th>
												
											</tr>
										</thead>
										<tbody>
                                        @foreach($reservation as $reserve)
											                        <tr>
											                        	<td>{{$reserve->id}}</td>
                                                <td>{{$reserve->nom}}</td>
                                                <td>{{$reserve->prenom}}</td>
                                                <td>{{$reserve->telephone}}</td>
                                                <td>{{$reserve->email}}</td>
                                                <td>{{$reserve->nom_space	}}</td >
                                                <td>{{$reserve->date_entre	}}</td >
                                                <td>{{$reserve->date_sorti	}}</td >
                                                <td>{{$reserve->deleted_at	}}</td >
                                                
                                              
                                          
                                         
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