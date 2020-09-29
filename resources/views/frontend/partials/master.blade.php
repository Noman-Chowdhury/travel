	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="frontend/img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Travel</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="frontend/css/linearicons.css">
			<link rel="stylesheet" href="frontend/css/font-awesome.min.css">
			<link rel="stylesheet" href="frontend/css/bootstrap.css">
			<link rel="stylesheet" href="frontend/css/magnific-popup.css">
			<link rel="stylesheet" href="frontend/css/jquery-ui.css">				
			<link rel="stylesheet" href="frontend/css/nice-select.css">							
			<link rel="stylesheet" href="frontend/css/animate.min.css">
			<link rel="stylesheet" href="frontend/css/owl.carousel.css">				
			<link rel="stylesheet" href="frontend/css/main.css">
		</head>
		<body>	
			@include('frontend.partials.topbar')
			
		@yield('content')		

			<!-- start footer Area -->		
@include('frontend.partials.footer')
			<!-- End footer Area -->	

			<script src="frontend/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="frontend/js/popper.min.js"></script>
			<script src="frontend/js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
 			<script src="frontend/js/jquery-ui.js"></script>					
  			<script src="frontend/js/easing.min.js"></script>			
			<script src="frontend/js/hoverIntent.js"></script>
			<script src="frontend/js/superfish.min.js"></script>	
			<script src="frontend/js/jquery.ajaxchimp.min.js"></script>
			<script src="frontend/js/jquery.magnific-popup.min.js"></script>						
			<script src="frontend/js/jquery.nice-select.min.js"></script>					
			<script src="frontend/js/owl.carousel.min.js"></script>							
			<script src="frontend/js/mail-script.js"></script>	
			<script src="frontend/js/main.js"></script>	
			<script>
$('#datepicker-dep').datepicker({
    minDate: 0
});                                                </script>
		</body>
	</html>