<!DOCTYPE html>
<html lang="en">
<head>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hotel Dashboard Template</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="plugins/datatables/datatables.min.css">
	<link rel="stylesheet" href="css/feathericon.min.css">
	<link rel="stylesheet" href="plugins/morris/morris.css">
	<link rel="stylesheet" href="css/style.css"> </head>
@include('admin.header')
@include('admin.menu')
<div class="container">
		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 edit_information">
        <form method="POST" action="{{route('FormeditTechnicienBD')}}">
                @csrf
                <input type="hidden" name="id" value="{{$technicien->id}}" />
                

                        @if(session()->get('success'))
                                        <div class="alert alert-success">
                                        {{ session()->get('success') }}  
                                        </div><br />
                                    @endif
				<h3 class="text-center">Edit Technicien Information</h3>
                
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<label class="profile_details_text">Nom :</label>
							<input type="text" name="nom" class="form-control" value="{{$technicien->nom}}" required >
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<label class="profile_details_text">Prénom : </label>
							<input type="text" name="prenom" class="form-control" value="{{$technicien->prenom}}" required>
						</div>
					</div>
				</div>
                <div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<label class="profile_details_text">Date de Naissance :</label>
							<input type="date" name="date_naissance" class="form-control" value="{{$technicien->date_naissance}}" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<label class="profile_details_text">Email :</label>
							<input type="email" name="email" class="form-control" value="{{$technicien->email}}" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<label class="profile_details_text">N° Teléphone :</label>
							<input type="tel" name="telephone" class="form-control" value="{{$technicien->telephone}}">
							
						</div>
					</div>
				</div>
				
                <div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<label class="profile_details_text">Photo :</label>
							<input id="image_equipe" type="file" name="image_equipe" value="{{$technicien->photo}}" class="form-control" required>
							
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 submit">
						<div class="form-group">
							<input type="submit" class="btn btn-success" value="Submit">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>