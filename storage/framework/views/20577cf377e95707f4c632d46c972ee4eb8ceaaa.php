<?php $__env->startSection('content'); ?>

<center><h1>Feedback Information</h1></center>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Comments</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$feed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row" style="font-weight: italic;"><?php echo e($key+1); ?></th>
      <td><?php echo e($feed->name); ?></td>
      <td><?php echo e($feed->email); ?></td>
      <td><?php echo e($feed->feed); ?></td>
      <td><?php echo e($feed->subject); ?></td>
      <td><?php echo e($feed->comments); ?></td>
     
      <!-- <td>      
      
      <a href="<?php echo e(route('deletefeedback',$feed->id)); ?>" class="btn btn-outline-danger" > × Remove</a></td> -->
     

        
    </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/travel/resources/views/backend/layouts/feedback.blade.php ENDPATH**/ ?>