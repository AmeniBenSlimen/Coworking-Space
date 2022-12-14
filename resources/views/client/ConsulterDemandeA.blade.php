
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Espace Client</title>


<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/feathericon.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
		@include('client.header')
		@include('client.menu')
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2">Consulter Demandes</h4>
                                
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
												<th>Date de Naissance</th>
                                                <th>Email</th>
                                                <th>T??lephone</th>
                                                <th>Photo</th>
                                                <th>Etat</th>

												<th colspan="2">Actions</th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($abonnement as $abonnements)
                                       
											<tr>
												<td>{{$abonnements->id}}</td>
                                                <td>{{$abonnements->nom}}</td>
                                                <td>{{$abonnements->prenom}}</td>
                                                <td>{{$abonnements->date_naissance}}</td>
                                                <td>{{$abonnements->email}}</td>
                                                <td>{{$abonnements->telephone}}</td>
                                                <td><img class="avatar-img rounded-circle" src="{{asset('images/'. $abonnements->photo)}}" alt="" height="100px" width="100px" ></td>
                                                
                                                <td>
												@if ($abonnements->etat==0)
                                                           <button type="button" class="btn btn-danger" >non r??solu</button>
                                                            @elseif($abonnements->etat==1)
                                                            <button type="button" class="btn btn-warning">en cours</button>
                                                            @else
                                                            <button type="button" class="btn btn-success">traite</button> 
                                                           @endif


                                                        </td>
                                                        <td>  <a href="{{route('editAbonnement', $abonnements->id)}}" type="button" class="btn btn-primary">modifier</a> 
                                                       
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