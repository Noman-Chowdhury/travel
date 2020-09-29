<?php $__env->startSection('content'); ?>			
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
			<?php echo $__env->make('frontend.partials.popular-destination', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<!-- End popular-destination Area -->
			

			<!-- Start price Area -->
			
			<!-- End price Area -->
			

			<!-- Start other-issue Area -->
			<?php echo $__env->make('frontend.partials.otherissue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<!-- End other-issue Area -->
			

			<!-- Start testimonial Area -->
		    <?php echo $__env->make('frontend.partials.testimonial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		    <!-- End testimonial Area -->

			<!-- Start home-about Area -->
			<!-- <?php echo $__env->make('frontend.partials.homearea', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
			<!-- End home-about Area -->
			
	
			<!-- Start blog Area -->
			<?php echo $__env->make('frontend.partials.blogarea', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<!-- End recent-blog Area -->			
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/travel/resources/views/frontend/layouts/home.blade.php ENDPATH**/ ?>