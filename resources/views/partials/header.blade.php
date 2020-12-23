<header id="header" id="home">
	<div class="container">
		<div class="row align-items-center justify-content-between d-flex">
			<div id="logo">
				<a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt="" title="" /></a>
			</div>
			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li class="menu-active"><a href="{{ route('home') }}">Home</a></li>

					<li class="menu-has-children"><a href="#">Job Seeker</a>
						<ul>
							 <li><a href="/signIn">Login</a></li>
                             <li><a href="/register">Register</a></li>

												
						</ul>
					</li>
					<li class="menu-has-children"><a href="#">Employeer</a>
						<ul>
							<li><a href="/login" >Login</a></li>

                            <li><a href="/login" >Register</a></li>

									
						</ul>
					</li>
				<!--	<li class="menu-has-children"><a href="#">Carrer Resources</a> 
						<ul>
							<li><a href="elements.html">Carrer Guide & Tips</a></li>
							
						</ul>
					</li> -->
				
					
					
				</ul>
			</nav><!-- #nav-menu-container -->
			
		</div>
	</div>
</header>

