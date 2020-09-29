<?php $__env->startSection('content'); ?>

<center><h1>All the Districts</h1></center>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">District Name</th>
      <th scope="col">Division Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row" style="font-weight: italic;"><?php echo e($key+1); ?></th>
      <td><?php echo e($district->dist_name); ?></td>
      <td><?php echo e($district->div->div_name); ?></td>
      <td>	</td>
    </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/travel/resources/views/backend/layouts/showdistrict.blade.php ENDPATH**/ ?>