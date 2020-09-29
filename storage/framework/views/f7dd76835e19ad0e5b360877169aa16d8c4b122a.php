<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">
	.invoice {
    position: relative;
    background: #fff;
    border: 1px solid #f4f4f4;
    padding: 20px;
    margin: 10px 25px;
}
.page-header {
    margin: 10px 0 20px 0;
    font-size: 22px;
}



</style>
<section class="content content_content" style="width: 70%; margin: auto;">
                    <section class="invoice">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                    <i class="fa fa-globe"></i> Traveler
                                    <small class="pull-right"><?php echo e(date('Y-m-d ')); ?></small>
                                </h2>
                            </div><!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                From
                                <address>
                                    <strong>
                                                                            </strong>
                                </address>
                            </div><!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                To
                                <address>
                                    <strong>
                                        <?php echo e(auth()->user()->name); ?>                                    </strong>
                                    <br>
                                    Address:
                                    Dhaka                                   <br>
                                    Phone:
                                    <?php echo e(auth()->user()->number); ?>                                   <br>
                                    Email:<?php echo e(auth()->user()->email); ?>                               </address>
                            </div><!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                <b>Invoice #100<?php echo e($booking->id); ?></b><br>
                                <br>
                                <b>Order ID:</b> <?php echo e($booking->package->package_id); ?><br>
                                <!-- <b>Payment Due:</b> 2/22/2014<br> -->
                                <b>Account:</b> <?php echo e(auth()->user()->number); ?>

                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-xs-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Package</th>
                                            <th>person</th>
                                             <th>Price</th>
                                            <th>Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                                                                <tr>
                                            <td><?php echo e($booking->package->package_name); ?></td>
                                            <td><?php echo e($booking->person); ?></td>
                                            <td><?php echo e($booking->package->price); ?></td>
                                            <td><?php echo e($booking->totalcost); ?></td>
                                        </tr>
                                                                            </tbody>
                                </table>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-md-12">
                               <!--  <p class="lead">Amount Due 2/22/2014</p> -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            
                                            
                                            <tr>
                                                <th>Total:</th>
                                                <td> <?php echo e($booking->totalcost); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-xs-12">
                                <!-- <a href="<?php echo e(route('print',$booking->id)); ?>" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                                
                                <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button> -->
                                <a href="<?php echo e(route('user')); ?>" class="btn btn-primary pull-right">Back To Profile</a>
                            </div>
                        </div>
                    </section>
                </section><?php /**PATH /opt/lampp/htdocs/travel/resources/views/user/layouts/payment.blade.php ENDPATH**/ ?>