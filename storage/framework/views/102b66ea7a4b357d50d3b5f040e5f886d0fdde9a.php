<style type="text/css">
.divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}



</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">







<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">

	<h4 class="card-title mt-3 text-center">Sign in</h4>
	<p class="text-center">Get started with your free account</p>

<!-- facebook and twitter-->

	<!-- <p>
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
	</p> -->


<!-- 	<p class="divider-text">
        <span class="bg-light">OR</span>
    </p> -->
    <?php if(Session::has('message')): ?>
<center><div class="alert alert-danger">
	<?php echo e(Session::get('message')); ?>

</div></center>
<?php endif; ?>
    <?php if(Session::has('msg')): ?>
<center><div class="alert alert-success">
    <?php echo e(Session::get('msg')); ?>

</div></center>
<?php endif; ?>
	<form action="<?php echo e(route('dologin')); ?>" method="POST" role="form">
		<?php echo csrf_field(); ?>

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="text">
    </div> <!-- form-group// -->


    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Enter password" type="password" name="password">
    </div> <!-- form-group// -->

<!--     <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Repeat password" type="password">
    </div> -->
     <!-- form-group// -->      

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Sign In  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">If you dont have account.! <a href="<?php echo e(route('registration')); ?>">Create an Account</a> </p>                                                                 
</form>


<?php /**PATH /opt/lampp/htdocs/travel/resources/views/backend/layouts/auth/loginpage.blade.php ENDPATH**/ ?>