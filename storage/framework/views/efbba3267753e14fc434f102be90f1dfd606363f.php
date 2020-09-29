<?php $__env->startSection('content'); ?>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Cars
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
      <th scope="col">Car Name</th>
      <th scope="col">Driver Name</th>
      <th scope="col">Seat</th>
      <th scope="col">Price</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($key+1); ?></th>
      <td><?php echo e($car->name); ?></td>
      <td><?php echo e($car->driver); ?></td>
      <td><?php echo e($car->seat); ?></td>
      <td><?php echo e($car->price); ?></td>
      <td><?php echo e($car->status); ?></td>
      <td><a href="<?php echo e(route('admin.packages.delete',$car->id)); ?>" class="btn btn-outline-danger" > × Remove</a></td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Cars</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
  <form action="<?php echo e(route('addcars')); ?>" method="POST" role="form" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="packagename">Car Name</label>
    <input type="text" class="form-control" id="packagename" name="carname" aria-describedby="emailHelp" placeholder="Enter Car Name">
  </div>

  <div class="form-group">

    <label for="details">Driver Name</label>
    <input type="text" class="form-control" id="details" name="drivername" placeholder="Enter Driver Name ">
  </div>

     <div class="form-group">

    <label for="seat">Seat</label>
    <input type="text" class="form-control" id="seat" name="seat"  placeholder="Available Seat">
  </div>    

   <div class="form-group">

    <label for="price">Price</label>
    <input type="text" class="form-control" id="price" name="price"  placeholder="Rent Price">
  </div>
   <div class="form-group">

    <label for="status">Status</label>
    <select name="status">
        <option value="Available">Available</option>
        <option value="Not Available">Not Available</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      </div>

    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/travel/resources/views/backend/layouts/cars.blade.php ENDPATH**/ ?>