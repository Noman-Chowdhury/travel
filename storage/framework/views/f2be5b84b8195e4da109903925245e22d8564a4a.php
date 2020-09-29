<?php echo $__env->make('frontend.partials.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>

<center><h1 class="mb-10" style=" margin: 5px;"> All Packages </h1></center>
<!-- New Part -->
<style type="text/css">
.detail {
    box-shadow: 3px 4px 5px 3px rgba(0,0,0,.2);
    margin-bottom: 20px;
    margin-left: 0px;
    margin-right: 0px;
}

.detail img {
    width: 100%;
    height: 220px;
}

.detail-box {
    margin-left: 20px;
}

.detail-box h4 {
    font-family: 'Bree Serif', serif;
    font-size: 24px;
    line-height: 28px;
    font-weight: 400;
    color: #27c74c;
    padding-top: 10px;
    margin-bottom: 10px;
    letter-spacing: 1px;
}

.detail-box p{
    margin-bottom: 14px;
    font-size: 13px;
    line-height: 20px;
    text-align: justify;
    margin-right: 10px;
}

.detail-box p a{
  border-bottom: 1px dotted #529cec;
  text-decoration: none;
  color: #529cec;
}

.detail-box p a:hover{
    color: #27c74c;
    border-bottom: 1px dotted #27c74c;
}

.detail-box p i.fas{
  color: #27c74c;
}

.detail-box ul{
  padding: 0px;
  margin: 0px;
  margin-bottom: 10px;
}

.detail-box ul li{
      list-style-type: none;
    display: inline-block;
    margin-right: 10px;
    font-size: 12px;
    line-height: 16px;
    font-weight: 400;
    color: #000;
    border: 2px solid #529cec;
    padding: 2px 6px;
    border-radius: 2px;
}

.detail-box ul li:hover{
  background-color: #529cec;
  border: 2px solid #529cec;
  color: #fff;
}

.detail-box h6{
    font-size: 14px;
    line-height: 18px;
}

.detail-box h6 i.fa{
  color: #27c74c;
}

.detail-box h6 span{
  float: right;
  font-family: 'Bree Serif', serif;
  font-size: 18px;
  line-height: 22px;
  font-weight: 400;
  color: #27c74c;  
  margin-right: 10px;
}

.carousel-item:after {
  content:"";
  display:block;
  position:absolute;
  top:0;
  bottom:0;
  left:0;
  right:0;
  background:rgba(0,0,0,0.4);
}

.detail-body{
  padding: 40px 0;
}

.title{
  padding-bottom: 30px;
}




.offer {
    background: linear-gradient(115deg, rgb(134, 128, 128) 0%, rgb(26, 97, 173) 50%, transparent 50%),#034212;
    max-width: 200px;
    font-size: 12px;
    line-height: 24px;
    font-weight: 400;
    color: #fff;
    border-radius: 2px;
    margin-bottom: 15px;
}

.offer-text {
    color: white;
    padding: 15px;
    font-weight: 700;
}

.offer-text-2 {
    color: white;
    font-weight: 700;
    margin-left: 25px;
}

.eligibal{
    padding: 20px;
    border: 1px solid #eee;
    background-color: rgba(239, 238, 238, 0.19);
}

.arrow-up {
    width: 0;
    height: 0;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 10px solid #fcfcfc;
    margin-top: -31px;
    position: absolute;
    right: 50px;
    z-index: 9999;
}

.eligibal p{
  font-size: 13px;
  line-height: 20px;
}

.ribbon {
    position: absolute;
    z-index: 1;
    overflow: hidden;
    width: 94px;
    height: 94px;
    text-align: center;
}

.ribbon span {
    font-size: 13px;
    font-weight: 700;
    color: #FFF;
    line-height: 25px;
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    width: 145px;
    display: block;
    background: #f94141;
    background: linear-gradient(#529cec 0,#043a75 100%);
    text-shadow: 1px 1px 2px rgba(0,0,0,.25);
    position: absolute;
    top: 25px;
    left: -34px;
}

.detail .discount-holder {
    color: #fff;
    background: #27c74c;
    top: 5px;
    right: -5px;
    position: relative;
    border-radius: 0 5px 0 0;
    float: right;
    font-size: 12px;
}

.detail .discount-holder span {
    display: block;
    position: relative;
    padding: 2px 12px 2px 8px;
}

.detail .discount-holder span:before {
    width: 0;
    height: 0;
    border-top: 17px solid #27c74c;
    border-left: 15px solid transparent;
    position: absolute;
    top: 0;
    left: -15px;
    content: '';
}

.detail .discount-holder span:after {
    width: 0;
    height: 0;
    border-bottom: 17px solid #27c74c;
    border-left: 15px solid transparent;
    position: absolute;
    bottom: 0;
    left: -15px;
    content: '';
}

.detail .discount-holder:after {
    background: #38bb56;
    border-bottom-right-radius: 4px;
    bottom: -6px;
    content: "";
    height: 6px;
    right: 0;
    position: absolute;
    width: 5px;
}

</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
			
	

<?php $__currentLoopData = $packagess; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="row detail">
          <div class="col-12 col-sm-12 col-md-12 col-lg-4 p-0">
            <div class="ribbon"><span> <?php echo e($package->loc->location_name); ?> </span></div>
            <img src="<?php echo e(url('/user/packages').'/'.$package->image1); ?>" alt="">
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-8 p-0">
            <span class="discount-holder"><span>Welcome</span></span>
            <div class="detail-box">
              <h4><?php echo e($package->package_name); ?></h4>
              <p>
                <div class="offer">
                    <span class="offer-text">Location:</span>
                    <span class="offer-text-2"><?php echo e($package->loc->location_name); ?></span>
                </div>
              </p>
              <ul>
                <li><strong>Total Seat: </strong> 5</li>
                <li><strong>Duration : </strong> 0 months</li>
                
              </ul>
              <p><strong><i class="fas fa-book"></i> Details: </strong><?php echo e($package->details); ?> <a href="#" data-toggle="collapse" data-target="#elig-box">show more</a></p>
              <h6><strong><i class="fa fa-clock"></i> Created Date</strong> <?php echo e($package->created_at); ?> <span>Cost: <?php echo e($package->price); ?>/- <a href="<?php echo e(route('singlepackage',$package->package_id)); ?>" class="btn btn-primary" style="font-size: 12px;">Check for more Details</a></span></h6>
            </div>
          </div>
         
        </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/travel/resources/views/frontend/layouts/locationdetails.blade.php ENDPATH**/ ?>