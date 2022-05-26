
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" >
<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li> <a href="index.html"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
						<li class="list-divider"></li>
					
						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Réclamations </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{route('ListeReclamationTechnicien')}}"> Liste des Réclamations  </a></li>
								
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Archive </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{route('Archive')}}">Liste des Panne Traiter </a></li>
								
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Réservation </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="">Liste des Réservations </a></li>
								
							</ul>
						</li>
						
						
				</div>
			</div>
		</div>