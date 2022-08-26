
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" >
<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li> <a href="/stats"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
						<li class="list-divider"></li>
						<li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Utilisateurs </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								
								<li><a href="{{route('ListeEquipe')}}"> Equipes </a></li>
								<li><a href="{{route('ListeTechnicien')}}"> Technicien </a></li>
                        <li><a href="{{route('ListeClient')}}"> Client </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{route('addUser')}}"> Ajouter Utilisateurs </a></li>
								<li><a href="{{route('FormEquipe')}}"> Ajouter Membres </a></li>
								<li><a href="{{route('FormProjet')}}"> Ajouter Projets </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Réclamation </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{route('ListeReclamation')}}"> Liste des Réclamation </a></li>
								
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span>Abonnement </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{route('ListeAbonnement')}}">Liste des Demandes </a></li>
								<li><a href="{{route('ArchiveAbonnement')}}"> Archive </a></li>
								
							</ul>
						</li>

						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span>Projet </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{route('FormProjet')}}">Form Ajouter projet </a></li>
								<li><a href="{{route('listeProjet')}}"> liste des projets  </a></li>
								
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-envelope"></i> <span> Espace </span> <span class="menu-arrow"></span></a>
									<ul class="submenu_class" style="display: none;">
										<li><a href="{{route('FormAddSpace')}}">Ajouter Espace </a></li>
										<li><a href="{{route('ListeSpace')}}"> Liste des espace </a></li>
										
									</ul>
								</li>
							
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-envelope"></i> <span> Matériels </span> <span class="menu-arrow"></span></a>
									<ul class="submenu_class" style="display: none;">
										
										<li><a href="{{route('ListeMateriel')}}"> Liste des Matériel </a></li>
										
									</ul>
								</li>
						
						</li>
	
								
						<li class="submenu"> <a href="#"><i class="fas fa-envelope"></i> <span> Reservation </span> <span class="menu-arrow"></span></a>
									<ul class="submenu_class" style="display: none;">
										
										<li><a href="{{route('ListeDemandeR')}}"> Liste des Reservation </a></li>
										<li><a href="{{route('ArchiveReservation')}}"> Archive </a></li>
										
									</ul>
								</li>
						
						</li>

						<li class="submenu"> <a href="#"><i class="fas fa-envelope"></i> <span> Partenaire </span> <span class="menu-arrow"></span></a>
									<ul class="submenu_class" style="display: none;">
									<li><a href="{{route ('formPartenaire')}}"> Ajouter partenaire </a></li>

										<li><a href="{{route('listePartenaire')}}"> Liste des Partenaires </a></li>
										
										
									</ul>
								</li>
						
						</li>
						
						
						
				</div>
			</div>
		</div>