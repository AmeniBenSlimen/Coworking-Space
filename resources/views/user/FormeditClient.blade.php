<link rel="stylesheet" href="assets/css/style.css">


<meta name="_token" content="{{csrf_token()}}" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>


<div class="container">
		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 edit_information">
        <form method="POST" action="{{route('FormeditClientBD')}}">
                @csrf
                <input type="hidden" name="id" value="{{$client->id}}"/>
                

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
							<input type="text" name="nom" class="form-control" value="{{$client->nom}}" required >
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<label class="profile_details_text">Prénom : </label>
							<input type="text" name="prenom" class="form-control" value="{{$client->prenom}}" required>
						</div>
					</div>
				</div>
                <div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<label class="profile_details_text">Date de Naissance :</label>
							<input type="date" name="date_naissance" class="form-control" value="{{$client->date_naissance}}" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<label class="profile_details_text">Email :</label>
							<input type="email" name="email" class="form-control" value="{{$client->email}}" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<label class="profile_details_text">N° Teléphone :</label>
							<input type="tel" name="telephone" class="form-control" value="{{$client->telephone}}">
							
						</div>
					</div>
				</div>
				
                <div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<label class="profile_details_text">Photo :</label>
							<input id="image_equipe" type="file" name="image_equipe" value="{{$client->photo}}" class="form-control" required>
							
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