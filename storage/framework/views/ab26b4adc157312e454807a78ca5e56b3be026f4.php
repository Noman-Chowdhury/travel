<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/travelz/admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Nov 2019 06:10:26 GMT -->
<head>
    <title>The Travel Admin Panel</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="admin/images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="backend/css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="backend/css/style.css">
    <link rel="stylesheet" href="backend/css/mob.css">

    <link rel="stylesheet" href="backend/css/materialize.css">
        <link rel="stylesheet" href="backend/css/bootstrap.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="backend/js/html5shiv.js"></script>
    <script src="backend/js/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .sb2-2 {
    float: left;
    width: 80%;
    border: solid 5px aliceblue;
    /*margin-left: 20%;*/
    background: white;
    padding: 0;
}
    </style>
</head>
<body>
<?php echo $__env->make('backend.partials.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        <li><img src="<?php echo e(url('/user/admin').'/'.auth()->user()->image); ?>" alt="">
                        </li>
                        <li>
                            <h5><?php echo e(auth()->user()->name); ?> <span> <?php echo e(auth()->user()->role); ?></span></h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
<?php echo $__env->make('backend.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                

          </div> 

            <!--== BODY INNER CONTAINER ==-->
                        <div class="sb2-2">

            <?php echo $__env->yieldContent('content'); ?>
        </div>
        </div>
    </div>

    <!--== BOTTOM FLOAT ICON ==-->
    <section>
        <div class="fixed-action-btn vertical">
            <a class="btn-floating btn-large red pulse">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
                </li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
                </li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a>
                </li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
                </li>
            </ul>
        </div>
    </section>

    <!--======== SCRIPT FILES =========-->
    <script src="backend/js/jquery.min.js"></script>
    <script src="backend/js/bootstrap.min.js"></script>
    <script src="backend/js/materialize.min.js"></script>
    <script src="backend/js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/travelz/admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Nov 2019 06:10:58 GMT -->
</html><?php /**PATH /opt/lampp/htdocs/travel/resources/views/backend/layouts/master.blade.php ENDPATH**/ ?>