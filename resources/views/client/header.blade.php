<div class="main-wrapper">
		<div class="header">
			<div class="header-left">
				<a href="/" class="logo"> <img src="{{asset('images/'. Auth::user()->photo )}}"   class="avatar-img rounded-circle"width="50" height="70" alt="logo"> <span class="logoclass">Coworking</span> </a>
				<a href="/" class="logo logo-small"> <img src="assets/img/hotel_logo.png" alt="Logo" width="30" height="30"> </a>
			</div>
			<a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
			<a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
			<ul class="nav user-menu">
				
				
				<li class="nav-item dropdown has-arrow">
					<a href="" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"> <img class="rounded-circle" src="{{asset('images/'. Auth::user()->photo )}}" width="31" alt="Soeng Souy"></span> </a>
					<div class="dropdown-menu">
						<div class="user-header">
							<div class="avatar avatar-sm"> <img src="{{asset('images/'. Auth::user()->photo )}}" alt="User Image" class="avatar-img rounded-circle"> </div>
							<div class="user-text">
								<h6> {{ Auth::user()->nom }} {{ Auth::user()->prenom }}</h6>
								<p class="text-muted mb-0">{{ Auth::user()->role }}</p>
							</div>
						</div> <a class="dropdown-item" href="{{route('ProfileClient' ,Auth::user()->id)}}">Mon Profile</a>
						 <a class="dropdown-item" href="{{route('FormUpdatePwClient' ,Auth::user()->id)}}">Changer mot de passe </a> 
						 
						 
						 <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
								 </div>
				</li>
			</ul>
		</div>