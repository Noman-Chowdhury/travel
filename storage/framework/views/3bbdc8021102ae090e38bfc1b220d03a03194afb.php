<h2><center>All User List</center></h2><hr>

<CENTER><label>Admin</label></CENTER><hr>
    <table class="table table-bordered" border="solid 1px red" width="100%">

  <thead>
    <tr>
      <th scope="col" >#</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
    </tr>
  </thead>
  <tbody>
   
    <?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($key+1); ?></th>
      <td><?php echo e($user->name); ?></td>
      <td><?php echo e($user->email); ?></td>
      <td>0<?php echo e($user->number); ?></td>
    </tr>
   
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

   </tbody>
</table>
<hr>



<CENTER><label>Customer</label></CENTER><hr>
                           	
    <table class="table table-bordered" border="solid 1px red" width="100%">
  <thead>
    <tr>
      <th scope="col" >#</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
    </tr>
  </thead>
  <tbody>
   
    <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($key+1); ?></th>
      <td><?php echo e($user->name); ?></td>
      <td><?php echo e($user->email); ?></td>
      <td>0<?php echo e($user->number); ?></td>
    </tr>
   
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

   </tbody>
</table>
<hr><?php /**PATH /opt/lampp/htdocs/travel/resources/views/backend/layouts/userprint.blade.php ENDPATH**/ ?>