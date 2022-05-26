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
				<div class="page-header mt-5">
					<div class="row">
						<div class="col">
							<h3 class="page-title">Profile</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
								<li class="breadcrumb-item active">Profile</li>
							</ul>
						</div>
					</div>
				</div>
				
						<div class="profile-menu">
							<ul class="nav nav-tabs nav-tabs-solid">
								<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a> </li>
								<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#password_tab">Password</a> </li>
							</ul>
						</div>
						<div class="tab-content profile-tab-cont">
							<div class="tab-pane fade show active" id="per_details_tab">
								<div class="row">
									<div class="col-lg-6">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title d-flex justify-content-between">
													<span>Personal Details</span>
													<a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i class="fa fa-edit mr-1"></i>Edit</a>
													</h5>
                                                    @if(session()->get('success'))
                                        <div class="alert alert-success">
                                        {{ session()->get('success') }}  
                                        </div><br />
                                    @endif
												<div class="row mt-5">
													<p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Name</p>
													<p class="col-sm-9">{{$admin->nom}} {{$admin->prenom}}</p>
												</div>
												<div class="row">
													<p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Date of Birth</p>
													<p class="col-sm-9">{{$admin->date_naissance}}</p>
												</div>
												<div class="row">
													<p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Email ID </p>
													<p class="col-sm-9"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="caaeabbca3aeaba6bcabb8afb08aafb2aba7baa6afe4a9a5a7">[{{$admin->email}}&#160;]</a></p>
												</div>
												<div class="row">
													<p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Mobile</p>
													<p class="col-sm-9">{{$admin->telephone}}</p>
												</div>
												
											</div>
										</div>
										<div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
											<div class="modal-dialog modal-dialog-centered" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Personal Details</h5>
														<a href="{{route('FormeditClient' ,Auth::user()->id)}}" type="button" class="close" data-dismiss="modal" aria-label="Close"
														><span aria-hidden="true">&times;</span> </a> 
													</div>
													<div class="modal-body">
														<form method="POST" action="{{ route('updateProfileUserBD') }}">

                                                        @csrf
														<input type="hidden" name="id" value="{{$admin->id}}" />
															<div class="row form-row">
																<div class="col-12 col-sm-6">
																	<div class="form-group">
																		<label>First Name</label>
																		<input type="text" class="form-control" name="nom" value="{{$admin->nom}}"> </div>
																</div>
																<div class="col-12 col-sm-6">
																	<div class="form-group">
																		<label>Last Name</label>
																		<input type="text" class="form-control" name="prenom" value="{{$admin->prenom}}"> </div>
																</div>
																<div class="col-12">
																	<div class="form-group">
																		<label>Date of Birth</label>
																		<div class="cal-icon">
																			<input type="date" class="form-control" name="date_naissance" value="{{$admin->date_naissance}}"> </div>
																	</div>
																</div>
																<div class="col-12 col-sm-6">
																	<div class="form-group">
																		<label>Email ID</label>
																		<input type="email" class="form-control" name="email" value="{{$admin->email}}"> </div>
																</div>
																<div class="col-12 col-sm-6">
																	<div class="form-group">
																		<label>Mobile</label>
																		<input type="text" name="telephone" value="{{$admin->telephone}}" class="form-control"> </div>
																</div>
                                                                <div class="col-12 col-sm-6">
																	<div class="form-group">
																		<label>Photo</label>
																		<input type="file" name="photo" value="{{$admin->photo}}" class="form-control"> </div>
																</div>
															
															<button type="submit" class="btn btn-primary btn-block">Save Changes</button>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title d-flex justify-content-between">
													<span>Personal Details</span>
													<a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i class="fa fa-edit mr-1"></i>Edit</a>
													</h5>
												<div class="row mt-5">
													<p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Name</p>
													<p class="col-sm-9">David Alvarez</p>
												</div>
												<div class="row">
													<p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Date of Birth</p>
													<p class="col-sm-9">24 Jul 1983</p>
												</div>
												<div class="row">
													<p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Email ID </p>
													<p class="col-sm-9"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="385c594e515c59544e594a5d42785d40595548545d165b5755">[email&#160;protected]</a></p>
												</div>
												<div class="row">
													<p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Mobile</p>
													<p class="col-sm-9">305-310-5857</p>
												</div>
												<div class="row">
													<p class="col-sm-3 text-sm-right mb-0">Address</p>
													<p class="col-sm-9 mb-0">4663 Agriculture Lane,
														<br> Miami,
														<br> Florida - 33165,
														<br> United States.</p>
												</div>
											</div>
										</div>
										<div class="modal fade" id="edit_personal_details1" aria-hidden="true" role="dialog">
											<div class="modal-dialog modal-dialog-centered" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Personal Details</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
													</div>
													<div class="modal-body">
														<form>
															<div class="row form-row">
																<div class="col-12 col-sm-6">
																	<div class="form-group">
																		<label>First Name</label>
																		<input type="text" class="form-control" value="John"> </div>
																</div>
																<div class="col-12 col-sm-6">
																	<div class="form-group">
																		<label>Last Name</label>
																		<input type="text" class="form-control" value="Doe"> </div>
																</div>
																<div class="col-12">
																	<div class="form-group">
																		<label>Date of Birth</label>
																		<div class="cal-icon">
																			<input type="text" class="form-control" value="24-07-1983"> </div>
																	</div>
																</div>
																<div class="col-12 col-sm-6">
																	<div class="form-group">
																		<label>Email ID</label>
																		<input type="email" class="form-control" value="johndoe@example.com"> </div>
																</div>
																<div class="col-12 col-sm-6">
																	<div class="form-group">
																		<label>Mobile</label>
																		<input type="text" value="+1 202-555-0125" class="form-control"> </div>
																</div>
																<div class="col-12">
																	<h5 class="form-title"><span>Address</span></h5> </div>
																<div class="col-12">
																	<div class="form-group">
																		<label>Address</label>
																		<input type="text" class="form-control" value="4663 Agriculture Lane"> </div>
																</div>
																<div class="col-12 col-sm-6">
																	<div class="form-group">
																		<label>City</label>
																		<input type="text" class="form-control" value="Miami"> </div>
																</div>
																<div class="col-12 col-sm-6">
																	<div class="form-group">
																		<label>State</label>
																		<input type="text" class="form-control" value="Florida"> </div>
																</div>
																<div class="col-12 col-sm-6">
																	<div class="form-group">
																		<label>Zip Code</label>
																		<input type="text" class="form-control" value="22434"> </div>
																</div>
																<div class="col-12 col-sm-6">
																	<div class="form-group">
																		<label>Country</label>
																		<input type="text" class="form-control" value="United States"> </div>
																</div>
															</div>
															<button type="submit" class="btn btn-primary btn-block">Save Changes</button>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="password_tab" class="tab-pane fade">
								<div class="card">
									<div class="card-body">
										<h5 class="card-title">Change Password</h5>
										<div class="row">
											<div class="col-md-10 col-lg-6">
												<form>
													<div class="form-group">
														<label>Old Password</label>
														<input type="password" class="form-control"> </div>
													<div class="form-group">
														<label>New Password</label>
														<input type="password" class="form-control"> </div>
													<div class="form-group">
														<label>Confirm Password</label>
														<input type="password" class="form-control"> </div>
													<button class="btn btn-primary" type="submit">Save Changes</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/select2.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>