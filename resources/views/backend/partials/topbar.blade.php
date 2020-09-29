


    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                <a href="{{route('admin')}}" class="logo"><img src="frontend/img/logo.png" alt="" height="50px;" />
                </a>
            </div>
            <!--== SEARCH ==-->
            <div class="col-md-6 col-sm-6 mob-hide">
                <!-- <form class="app-search">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href="#"><i class="fa fa-search"></i></a>
                </form> -->
            </div>
            <!--== NOTIFICATION ==-->
            <div class="col-md-2 tab-hide">
                <div class="top-not-cen">
                    <!-- <a class='waves-effect btn-noti' href='#'><i class="fa fa-commenting-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href='#'><i class="fa fa-envelope-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href='#'><i class="fa fa-tag" aria-hidden="true"></i><span>5</span></a> -->
                </div>
            </div>
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img src="{{url('/user/admin').'/'.auth()->user()->image}}" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>

                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>                    
                
                    <li><a href="{{route('admin.packages')}}" class="waves-effect"><i class="fa fa-umbrella" aria-hidden="true"></i> Tour Packages</a>
                    </li>
                    <li><a href="{{route('admin.location')}}" class="waves-effect"><i class="fa fa-building-o" aria-hidden="true"></i> Locations</a>
                    </li>
                    <li><a href="{{route('userbooking')}}" class="waves-effect"><i class="fa fa-flag-checkered" aria-hidden="true"></i> Booking</a>
                    </li>
                    <li><a href="{{route('userlist')}}" class="waves-effect"><i class="fa fa-tags" aria-hidden="true"></i> Update User Info</a>
                    </li>
                    <li><a href="{{route('adduser')}}" class="waves-effect"><i class="fa fa-user-plus" aria-hidden="true"></i> Add New User</a>
                    </li>
                    <li><a href="#" class=""><i class="fa fa-undo" aria-hidden="true"></i> Backup Data</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{route('logout')}}" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>