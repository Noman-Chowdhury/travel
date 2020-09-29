@extends('frontend.partials.master')

@section('content')			
			<!-- start banner Area -->
				<section class="banner-area relative">
				<div class="overlay overlay-bg"></div>				
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 banner-left">
							<h6 class="text-white">Away from monotonous life</h6>
							<h1 class="text-white">Magical Travel</h1>
							<p class="text-white">
								If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.
							</p>
							<a href="#" class="primary-btn text-uppercase">Get Started</a>
						</div>
						
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			<!-- Start popular-destination Area -->
			@include('frontend.partials.popular-destination')
			<!-- End popular-destination Area -->
			

			<!-- Start price Area -->
			
			<!-- End price Area -->
			

			<!-- Start other-issue Area -->
			@include('frontend.partials.otherissue')
			<!-- End other-issue Area -->
			

			<!-- Start testimonial Area -->
		    @include('frontend.partials.testimonial')
		    <!-- End testimonial Area -->

			<!-- Start home-about Area -->
			<!-- @include('frontend.partials.homearea') -->
			<!-- End home-about Area -->
			
	
			<!-- Start blog Area -->
			@include('frontend.partials.blogarea')
			<!-- End recent-blog Area -->			
@stop