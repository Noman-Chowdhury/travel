<header id="header">
				<div class="header-top">
					<div class="container">
			  		<div class="row align-items-center">
			  			<div class="col-lg-6 col-sm-6 col-6 header-top-left">
			  				<ul>
			  					
			  					
			  					
			  				</ul>			
			  			</div>
			  			<div class="col-lg-6 col-sm-6 col-6 header-top-right">
							<div class="header-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>
			  			</div>
			  		</div>			  					
					</div>
				</div>
				<div class="container main-menu">
					<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="{{route('home')}}"><img src="frontend/img/logo.png" alt="" height="65px;" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li><a href="{{route('home')}}">Home</a></li>
				          <li><a href="{{route('car')}}">Car Rental</a></li>
				          <li><a href="{{route('packages')}}">Packages</a></li>
				         
				          <!-- <li><a href="{{route('about')}}">Events</a></li> -->
				          <li><a href="{{route('contact')}}">Contact Us</a></li>
				          @auth()
				          @if(auth()->user()->role=="Customer")
 
				          <li class=""><a href="{{route('normalbooking')}}">Booking Form</a></li>
				          <li class=""><a href="{{route('user')}}">Profile</a></li>	
				          <li class=""><A href="{{route('userlogout')}}" >Logout</A></li>
				         
@endif	
@endauth()
@guest()
							<li><a href="{{route('loginpage')}}">Sign In/ Signup</a></li>
		@endguest()		          
				        </ul>
				      </nav><!-- #nav-menu-container -->					      		  
					</div>
				</div>
			</header><!-- #header -->