<?php $__env->startSection('content'); ?>

<center><h1>Booking Information</h1></center>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Package Name</th>
      <th scope="col">Date</th>
      <th scope="col">Person</th>
      <th scope="col">Comments</th>
      <th scope="col">Cost</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $bookinginfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row" style="font-weight: italic;"><?php echo e($key+1); ?></th>
      <td><?php echo e($book->user->name); ?></td>
      <td><?php echo e($book->package->package_name); ?></td>
      <td><?php echo e($book->checkin_date); ?></td>
      <td><?php echo e($book->person); ?></td>
      <td><?php echo e($book->details); ?></td>
      <td><?php echo e($book->totalcost); ?></td>
      <td><?php echo e($book->status); ?></td>
      <td>
      <?php if($book->status=='Pending'): ?>
      <a href="<?php echo e(route('userbookingupdate',$book->id)); ?>" class="btn btn-outline-danger" > Approve </a>
        <?php endif; ?>
        <?php if($book->status=='Approve'): ?>
      <a href="<?php echo e(route('userbookingdeny',$book->id)); ?>" class="btn btn-outline-danger" > × Remove</a></td>
      <?php endif; ?>

        
    </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/travel/resources/views/backend/layouts/userbooking.blade.php ENDPATH**/ ?>