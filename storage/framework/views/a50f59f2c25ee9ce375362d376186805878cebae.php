<?php echo $__env->make('frontend.partials.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">



<div class="content">
<div class="container">
    	<div class="row">
	
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30 text-center">
                        <h2>Tour & Travel Reservation Booking Form</h2>
                        </div>
                        </div>
	<div class="row">
	
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30">
                        <div class="tour-booking-form">
                            <form action="<?php echo e(route('authdobooking')); ?>" method="POST" role="form">
                            	<?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <h4 class="tour-form-title">Your Travel Plan Detail</h4>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        
                                            
                                            <div class="form-group">
                                            <label class="control-label required" for="select">Destination</label>

                                                <input type="" name="package_id" hidden value="<?php echo e($package->package_id); ?>">
                                            
                                                <h5 name="package_id" value="<?php echo e($package->package_id); ?>"><?php echo e($package->package_name); ?></h5>
                                            </div>
                                        
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="datepicker">Check in</label>
                                            <div class="input-group">
                                                <input id="datepicker" name="checkin" type="date" placeholder="Date" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label required" for="select">Number of Persons:</label>
                                            <div class="select">
                                                <input type="text" name="person">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt30">
                                        <h4 class="tour-form-title">Your Travel Plan Detail</h4>
                                    </div>
                                    

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="name">Name</label>
                                            <input id="name" type="text" name="name" value="<?php echo e(Auth()->User()->name); ?> " class="form-control" disabled="">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

                                        <label class="control-label" for="email"> Picture</label>
                                        
                                           <div class="col-md-3 col-lg-4 " align="center"> <img alt="User Pic" src="<?php echo e(url('/user/customer').'/'.auth()->user()->image); ?>" class="img-thumbnail"> </div>
                                        
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="email"> Email</label>
                                            <input id="email" type="text" name="email" value="<?php echo e(Auth()->User()->email); ?> " class="form-control" disabled="">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="phone"> Phone</label>
                                            <input id="phone" type="text" name="number" value="<?php echo e(Auth()->User()->number); ?> " class="form-control" disabled="">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="city">Country</label>
                                            <input id="city" type="text" value="Bangladesh" class="form-control" disabled="">
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="textarea">Describe Your Travel Requirements</label>
                                            <textarea class="form-control" id="textarea" name="details" rows="4" placeholder="Write Your Requirements"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <button type="submit" name="singlebutton" class="btn btn-primary" data-toggle="modal" data-target="#">Send Enquiry</button>
                                    </div>


                                </div>
                                </form>
                        </div>
                        
                    </div>
	</div>

</div>
</div>


<!-- MOdal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="alert alert-success">
        <center>Thank you so much for Booking. We'll Contact you soon.!! </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/travel/resources/views/frontend/layouts/authnormalbooking.blade.php ENDPATH**/ ?>