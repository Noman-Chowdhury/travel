<?php $__env->startSection('content'); ?>

<table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Full Name:</td>
                        <td><?php echo e(Auth()->User()->name); ?></td>
                      </tr>
                      <tr>
                        <td>Phone Number</td>
                        <td><?php echo e(Auth()->User()->number); ?></td>
                      </tr>
                      <tr>
                        <td>Account Created At</td>
                        <td><?php echo e(Auth()->User()->created_at); ?></td>
                      </tr>
                   
                         <tr>
                      <tr>
                        <td>Email</td>
                        <td><?php echo e(Auth()->User()->email); ?></td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td>Bangladesh, Dhaka</td>
                      </tr>
                      
                    
                     
                    </tbody>
                  </table>
                  <?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/travel/resources/views/user/layouts/home.blade.php ENDPATH**/ ?>