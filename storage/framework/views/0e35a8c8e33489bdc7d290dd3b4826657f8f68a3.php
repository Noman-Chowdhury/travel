<?php echo $__env->make('frontend.partials.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<style type="text/css">
  body {
    color: black;
    font-family: "Poppins", sans-serif;
    font-size: 20px;
    font-weight: 300;
    line-height: 1.625em;
}

</style>

<center><h2>Get Guide Information from Here</h2></center><hr>
<div>
  <label class="bold">Select Location to get Specific Tour Guide</label>
</div>

<div>
  <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="container">
      <a href="<?php echo e(route('guides',$location->location_id)); ?>"><?php echo e($location->location_name); ?></a>
  </div>
    
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/travel/resources/views/frontend/layouts/guide.blade.php ENDPATH**/ ?>