<?php $__env->startSection('content'); ?>

<?php if(Session::has('message')): ?>
<center><div class="alert alert-success">
	<?php echo e(Session::get('message')); ?>

	</div></center>
	<?php endif; ?>

<form action="<?php echo e(route('admin.adddistrict')); ?>" method="POST" role="form">
	<?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="div">Select Division</label>

    <select name="divid" id="div">
    	<?php $__currentLoopData = $divisions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $division): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		<option value="<?php echo e($division->div_id); ?>"><?php echo e($division->div_name); ?></option>

    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </select>
  </div>
  <div class="form-group"> 
  	<b><label for="name">Enter District Name</label></b>
  	<input type="text" name="name" id="name">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/travel/resources/views/backend/layouts/district.blade.php ENDPATH**/ ?>