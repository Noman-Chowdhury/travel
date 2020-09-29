    <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="<?php echo e(route('admin')); ?>" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="<?php echo e(route('userlist')); ?>">All Users</a>
                                    </li>
                                    <li><a href="<?php echo e(route('adduser')); ?>">Add New user</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-umbrella" aria-hidden="true"></i> Tour Packages</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="<?php echo e(route('admin.packages')); ?>">All Packages</a>
                                    </li>
                                    <li><a href="">Add New Package</a>
                                    </li>
                                    <li><a href="<?php echo e(route('admin.location')); ?>">All Locations</a>
                                    </li>
                                    <li><a href=" ">Add Locations</a>
                                    </li>
                                    <li><a href=" <?php echo e(route('admin.district')); ?>">Add District</a>
                                    </li>
                                    <li><a href="<?php echo e(route('admin.showdistrict')); ?> ">View All Districts</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                       <!--  <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-h-square" aria-hidden="true"></i> Hotels</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="">All Hotels</a>
                                    </li>
                                    <li><a href="">Add New Hotel</a>
                                    </li>                                    
                                </ul>
                            </div>
                        </li> -->
                        <li><a href="<?php echo e(route('cars')); ?>" class="collapsible-header"><i class="fa fa-picture-o" aria-hidden="true"></i> Transport</a>
                           
                        </li> 

                        <li><a href="<?php echo e(route('guide')); ?>" class="collapsible-header"><i class="fa fa-picture-o" aria-hidden="true"></i> Tour Guide</a>
                           
                        </li>

                        <li><a href="<?php echo e(route('userbooking')); ?>" class="collapsible-header"><i class="fa fa-picture-o" aria-hidden="true"></i> Booking</a>
                           
                        </li>

                        <li><a href="<?php echo e(route('userfeedback')); ?>" class="collapsible-header"><i class="fa fa-picture-o" aria-hidden="true"></i> Feedback</a>
                           
                        </li>
                        <!-- <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar-o" aria-hidden="true"></i> Events</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="event-all.html">All Events</a>
                                    </li>
                                    <li><a href="event-add.html">Add New Event</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                      
                        <!-- <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-usd" aria-hidden="true"></i> Discounts</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="discount.html">All Discounts</a>
                                    </li>
                                    <li><a href="discount-add.html">Add New Discounts</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                       <!--  <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-tags" aria-hidden="true"></i> Offers</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="offers.html">All Offers</a>
                                    </li>
                                    <li><a href="offers-add.html">Add New Offers</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                        <!-- <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-ticket" aria-hidden="true"></i> Booking & Enquiry</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="hotel-booking-all.html">Hotel</a>
                                    </li>
                                    <li><a href="package-booking-all.html">Package</a>
                                    </li>
                                    <li><a href="sight-see-booking-all.html">Sight Seeings</a>
                                    </li>
                                    <li><a href="event-booking-all.html">Events</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                        <!-- <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-rss" aria-hidden="true"></i> Blog & Articals</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="blog-all.html">All Blogs</a>
                                    </li>
                                    <li><a href="blog-add.html">Add Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                        <li><a href="<?php echo e(route('home')); ?>"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Website</a>
                        </li>
                        <li><a href="<?php echo e(route('logout')); ?>" target="_blank"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                        </li>
                    </ul>
</div><?php /**PATH /opt/lampp/htdocs/travel/resources/views/backend/partials/sidebar.blade.php ENDPATH**/ ?>