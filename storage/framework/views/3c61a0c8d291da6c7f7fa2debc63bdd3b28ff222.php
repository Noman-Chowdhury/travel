<?php echo $__env->make('frontend.partials.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<style type="text/css">
	.form-control{
		width:  70%

	}

</style>
<center><h3>Please Submit the form to Rent a Car</h3></center><hr>
<center><div>
<div class="form-control"  >
	<?php if(Session::has('msg')): ?>
	<div class="alert alert-success">
		<?php echo e(Session::get('msg')); ?>

	</div>
	<?php endif; ?>
<form action="<?php echo e(route('bookcar')); ?>" method="POST" role="form">
	<?php echo csrf_field(); ?>
  <div class="form-group">

    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" name="name">    
  </div>
  <div class="form-group">
    
    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="Number" placeholder="Enter Number" name="number">
  </div>
  <div class="form-group">

    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter your Address" name="address" >
  </div> 

    <div class="form-group">
    
    <select name="destination" class="form-control">
    	<?php $__currentLoopData = $destinations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    	<option value="<?php echo e($car->location_name); ?>"><?php echo e($car->location_name); ?></option>
    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
  </div>

  <div class="form-group">
    
    <select name="car" class="form-control">
    	<?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    	<option value="<?php echo e($car->id); ?>"><?php echo e($car->name); ?>,<?php echo e($car->seat); ?>Seat,BDT-<?php echo e($car->price); ?>TK </option>
    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
  </div>
  <div class="form-group">
   
    <input type="number" class="form-control" id="noofcars" placeholder="Number of Cars" name="noc">
  </div>
  <div class="form-group">

    <input type="number" class="form-control" id="people" placeholder="Number of People" name="nop">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</div></center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/travel/resources/views/frontend/layouts/carrent.blade.php ENDPATH**/ ?>