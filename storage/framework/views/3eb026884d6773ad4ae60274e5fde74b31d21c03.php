<?php $__env->startSection('content'); ?>
	
	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Guide Information
</button>

<?php if(Session::has('msg')): ?>
<div class="alert alert-success">
	<?php echo e(Session::get('msg')); ?>

</div>
<?php endif; ?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <b><th scope="col">#</th></b>
      <b><th scope="col">Guide Name</th></b>
      <b><th scope="col">From</th></b>
      <b><th scope="col">Phone Number</th></b>
      <b><th scope="col">Fee</th></b>
      <b><th scope="col">Status</th></b>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $guides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$guide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($key+1); ?></th>
      <td><?php echo e($guide->name); ?></td>
      <td><?php echo e($guide->loc->location_name); ?></td>
      <td><?php echo e($guide->number); ?></td>
      <td><?php echo e($guide->fee); ?></td>
      <td><?php echo e($guide->status); ?></td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Guide</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
  <form action="<?php echo e(route('addguide')); ?>" method="POST" role="form" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="name">Guide Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Guide Name">
  </div>  


  <div class="form-group">

    <select class="browser-default custom-select" name="location" >

  <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <option value="<?php echo e($loc->location_id); ?>"><?php echo e($loc->location_name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>
  <div class="form-group">
    <label for="number">Phone Number</label>
    <input type="text" class="form-control" id="number" name="number" aria-describedby="emailHelp" placeholder="Enter number ">
  </div>

  <div class="form-group">

    <label for="fee"> Guidence Fee</label>
    <input type="text" class="form-control" id="fee" name="fee" placeholder="Enter fee">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      </div>

    </div>
  </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/travel/resources/views/backend/layouts/guide.blade.php ENDPATH**/ ?>