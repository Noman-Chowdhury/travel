<?php echo $__env->make('frontend.partials.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="frontend/css/about.css">

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->




<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


 <div class="contact-pageheader">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="contact-caption">
                        <h1 class="contact-title">Feel free to Send us Email</h1>
                        <p class="contact-text">Here is a few approaches to get in touch with us. It would be ideal if you send an email, fill the contact form <strong>I'm looking forward to speaking with you.</strong>
                        </p>
                    </div>
                </div>
                <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12 col-xs-12">
                    <div class="contact-form">
                        <h3 class="contact-info-title">Contact us</h3>
                        <div class="row">
                            <form action="<?php echo e(route('docontact')); ?>" method="post" role="form">
                                <?php echo csrf_field(); ?>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only " for="Name"></label>

                                        <input id="name" type="text" placeholder="Name" name="name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only " for="email"></label>

                                        <input id="email" type="text" placeholder="Email" name="email" class="form-control" required>

                                    </div>
                                </div>
                     
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb20">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="textarea"></label>
                                        <textarea class="form-control pdt20" id="textarea" name="message" rows="4" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                    <button class="btn btn-primary btn-lg ">Send message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb60">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <div id="contact-map"></div>
                </div>
                <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-6 col-xs-12">
                    <div class="">
                        <h3 class="title-bold">Contact Info</h3>
                        <p>Please help us serve you better by sharing the following information.
                        </p>
                    </div>
                    <div class="contact-section">
                        <div class="contact-icon"><i class="fa fa-map-marker"></i></div>
                        <div class="contact-info">
                            <p>Koddeo, Kawla Bazar, Airport, Uttara, Dhaka-1230/p>
                        </div>
                    </div>
                     <div class="contact-section">
                        <div class="contact-icon"><i class="fa fa-phone"></i></div>
                        <div class="contact-info">
                            <p>+8801682101354</p>
                        </div>
                    </div>
                     <div class="contact-section">
                        <div class="contact-icon"><i class="fa fa-envelope"></i></div>
                        <div class="contact-info">
                            <p>15103107@iubat.edu</p>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    
    
     <script>
    function initMap() {
        var uluru = {
            lat: 23.7033809,
            lng: 90.4194374
        };
        var map = new google.maps.Map(document.getElementById('contact-map'), {
            zoom: 14,
            center: uluru,
            scrollwheel: false
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            icon: 'https://easetemplate.com/free-website-templates/life-coach/images/map_marker.png'

        });
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZib4Lvp0g1L8eskVBFJ0SEbnENB6cJ-g&callback=initMap">
    </script>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/travel/resources/views/frontend/layouts/contact.blade.php ENDPATH**/ ?>