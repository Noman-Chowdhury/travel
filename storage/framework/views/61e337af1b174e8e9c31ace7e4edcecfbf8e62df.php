<?php $__env->startSection('content'); ?>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Packages
</button>

<?php if(Session::has('msg')): ?>
<script type="text/javascript">
  <?php echo e(Session::get('msg')); ?>

</script>
<?php endif; ?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Package Name</th>
      <th scope="col">Location</th>
      <th scope="col">Details</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $allpackage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($key+1); ?></th>
      <td><?php echo e($package->package_name); ?></td>
      <td><?php echo e($package->loc->location_name); ?> ,<?php echo e($package->loc->dist->dist_name); ?> ,<?php echo e($package->loc->dist->div->div_name); ?></td>
      <td><?php echo e($package->details); ?></td>
      <td><?php echo e($package->price); ?></td>
      <td><a href="<?php echo e(route('admin.packages.delete',$package->package_id)); ?>" class="btn btn-outline-danger" > × Remove</a></td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Packages</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
  <form action="<?php echo e(route('admin.addpackages')); ?>" method="POST" role="form" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="packagename">Package Name</label>
    <input type="text" class="form-control" id="packagename" name="packagename" aria-describedby="emailHelp" placeholder="Enter Package Name">
  </div>
  <div class="form-group">

    <select class="browser-default custom-select" name="location" >
  <option selected>Location</option>
  <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <option value="<?php echo e($location->location_id); ?>"><?php echo e($location->location_name); ?></option>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>
  <div class="form-group">

    <label for="details">Details</label>
    <input type="text" class="form-control" id="details" name="details" placeholder="Enter Package Details">
  </div>

    <div class="form-group">

    <label for="img1">Image1</label>
    <input type="file" class="form-control" id="img1" name="image1"  placeholder="Enter Package Price">
  </div>
    <div class="form-group">

    <label for="img2">Image2</label>
    <input type="file" class="form-control" id="img2" name="image2"  placeholder="Enter Package Price">
  </div> 
     <div class="form-group">

    <label for="price">Price</label>
    <input type="text" class="form-control" id="price" name="price"  placeholder="Enter Package Price">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      </div>

    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/travel/resources/views/backend/layouts/packages.blade.php ENDPATH**/ ?>