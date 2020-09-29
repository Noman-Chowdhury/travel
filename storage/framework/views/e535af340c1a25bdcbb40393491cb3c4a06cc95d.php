<?php $__env->startSection('content'); ?>
	
	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Location
</button>

<?php if(Session::has('message')): ?>
<div class="alert alert-success">
	<?php echo e(Session::get('message')); ?>

</div>
<?php endif; ?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <b><th scope="col">#</th></b>
      <b><th scope="col">Location Name</th></b>
      <b><th scope="col">Location Image</th></b>
      <b><th scope="col">District Name</th></b>
      <b><th scope="col">Division Name</th></b>
      <b><th scope="col">Location Details</th></b>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($key+1); ?></th>
      <td><?php echo e($location->location_name); ?></td>
      <td><?php echo e($location->image); ?></td>
      <td><?php echo e($location->dist->dist_name); ?></td>
      <td><?php echo e($location->dist->div->div_name); ?></td>
      <td><?php echo e($location->location_details); ?></td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Location</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
  <form action="<?php echo e(route('admin.addlocation')); ?>" method="POST" role="form" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="location_name">Location Name</label>
    <input type="text" class="form-control" id="location_name" name="location_name" aria-describedby="emailHelp" placeholder="Enter Location Name">
  </div>

  <div class="form-group">

    <label for="img1">Image</label>
    <input type="file" class="form-control" id="img1" name="image"  placeholder="Enter Package Price">
  </div>
  <div class="form-group">

    <select class="browser-default custom-select" name="district_id" >
  <option selected>Select District</option>
  <?php $__currentLoopData = $divisions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $division): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <option value="<?php echo e($division->dist_id); ?>"><?php echo e($division->dist_name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>
  <div class="form-group">

    <label for="location_details">Location Details</label>
    <input type="text" class="form-control" id="location_details" name="location_details" placeholder="Enter Package Details">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      </div>

    </div>
  </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/travel/resources/views/backend/layouts/addlocation.blade.php ENDPATH**/ ?>