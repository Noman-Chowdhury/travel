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

<center><h2>From: <?php echo e($location->location_name); ?></h2></center><hr>
<?php $__currentLoopData = $guide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<label for="name" class="bold"><?php echo e($key+1); ?></label>
<div class="container">
  
  <p id="name">Name:  <t><?php echo e($g->name); ?></t></p>
  <p id="name">Lives In:  <t><?php echo e($g->loc->location_name); ?>,<?php echo e($g->loc->dist->dist_name); ?>,<?php echo e($g->loc->dist->div->div_name); ?></t></p>
  <p id="name">Phone Number:  <t><?php echo e($g->number); ?></t></p>
  <p id="name">Fee:  <t><?php echo e($g->fee); ?></t></p>
  <p id="name"><?php echo e($g->status); ?></t></p>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/travel/resources/views/frontend/layouts/allguide.blade.php ENDPATH**/ ?>