<div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                <form method="POST" action="">
                @csrf
            
                

                @if(session()->get('success'))
                                <div class="alert alert-success">
                                {{ session()->get('success') }}  
                                </div><br />
                            @endif
                    <h4 class="text-right">Profile</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Nom :</label><input type="text" class="form-control" placeholder="first name" name="nom" value=""></div>
                    <div class="col-md-6"><label class="labels">Prénom :</label><input type="text" class="form-control" name="prenom" value="" placeholder="surname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Date de Naissance :</label><input type="date" name="date_naissance" class="form-control" name="date_naissance" value="" required></div>
                    <div class="col-md-12"><label class="labels">Email :</label><input type="email" class="form-control" placeholder="enter email id" name="email" value=""></div>
                    <div class="col-md-12"><label class="labels">N° Télephone :</label><input type="text" class="form-control" placeholder="education" name="telephone" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Photo :</label><input id="photo" type="file" name="photo" value="" class="form-control" required></div>
                </div>
                <div class="mt-5 text-center">
                <div class="form-group">
							<input type="submit" class="btn btn-success" value="Submit">
						</div>
               
            </div>
        </div>
       
    </div>
</div>

</from>
