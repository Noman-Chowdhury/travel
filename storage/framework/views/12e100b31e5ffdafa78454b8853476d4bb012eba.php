			<section class="popular-destination-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Popular Destinations</h1>
		                        <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day.</p>
		                    </div>
		                </div>
		            </div>	
		            	
					<div class="row">
						<?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-lg-4">
						
							<div class="single-destination relative">
								
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="<?php echo e(url('/user/location').'/'.$location->image); ?>" alt="">
								</div>
								<div class="desc">	
									<a href="<?php echo e(route('locationpackage',$location->location_id)); ?>" class="price-btn">Check Details</a>			
									<h4><?php echo e($location->location_name); ?></h4>
									<p><?php echo e($location->dist->dist_name); ?></p>			
								</div>
								
							</div><br>
							
						</div>

							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						<!-- <div class="col-lg-4">
							<div class="single-destination relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="frontend/img/d2.jpg" alt="">
								</div>
								<div class="desc">	
									<a href="#" class="price-btn">Check Details</a>			
									<h4>Cox's Bazar</h4>
									<p>Chottogram</p>			
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destination relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="frontend/img/d3.jpg" alt="">
								</div>
								<div class="desc">	
									<a href="#" class="price-btn">Check Details</a>			
									<h4>Boga Lake</h4>
									<p>Bandarban</p>			
								</div>
							</div>
						</div>												
					</div> -->



				</div>	
				

			</section><?php /**PATH /opt/lampp/htdocs/travel/resources/views/frontend/partials/popular-destination.blade.php ENDPATH**/ ?>