<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('edit')); ?>" method="POST" role="form" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  
  <div class="form-group">
    <label for="name">Full Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" value="<?php echo e(auth()->user()->name); ?>" name="name">
    </div>
  <div class="form-group">
    <label for="number">Phone Number</label>
    <input type="text" class="form-control" id="number" value="<?php echo e(auth()->user()->number); ?>" name="number">
  </div>
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="text" class="form-control" id="email" value="<?php echo e(auth()->user()->email); ?>" name="email">
  </div>
  <div class="form-group">
    <label for="password">Change Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>




                    
                  <?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/travel/resources/views/user/layouts/edit.blade.php ENDPATH**/ ?>