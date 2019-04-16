</head>
<body class="horizontal-layout horizontal-menu 2-columns menu-expanded" data-open="hover" data-menu="horizontal-menu"
      data-col="2-columns">
<span id="hdata"
      data-df="<?php echo $this->config->item('dformat2'); ?>"
      data-curr="<?php echo currency($this->aauth->get_user()->loc); ?>"></span>
<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid">

            <!-- Logo container-->
            <div class="logo">
                <!-- Image Logo -->
                <a href="<?= base_url() ?>dashboard/" class="logo">
                    <img src="<?php echo base_url(); ?>userfiles/theme/logo-header.png" alt="" height="32"
                         class="logo-small">
                    <img src="<?php echo base_url(); ?>userfiles/theme/logo-header.png" alt="" height="20"
                         class="logo-large">
                </a>

            </div>
            <!-- End Logo container-->


            <div class="menu-extras topbar-custom">


                <ul class="list-inline float-right mb-0">
                    <!-- Search -->
                    <li class="list-inline-item dropdown notification-list d-none d-sm-inline-block">
                        <form role="search" class="app-search">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="Search..">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li>
                    <!-- Messages-->
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                           role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-email-outline noti-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">5</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-animated dropdown-menu-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <span class="badge badge-danger float-right">367</span>
                                <h5>Messages</h5>
                            </div>

                            <div class="slimscroll" style="max-height: 230px;">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="assets/images/users/user-2.jpg" alt="user-img"
                                                                  class="img-fluid rounded-circle"/></div>
                                    <p class="notify-details"><b>Charles M. Jones</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="assets/images/users/user-3.jpg" alt="user-img"
                                                                  class="img-fluid rounded-circle"/></div>
                                    <p class="notify-details"><b>Thomas J. Mimms</b><span class="text-muted">You have 87 unread messages</span>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="assets/images/users/user-4.jpg" alt="user-img"
                                                                  class="img-fluid rounded-circle"/></div>
                                    <p class="notify-details">Luis M. Konrad<span class="text-muted">It is a long established fact that a reader will</span>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="assets/images/users/user-5.jpg" alt="user-img"
                                                                  class="img-fluid rounded-circle"/></div>
                                    <p class="notify-details"><b>Kendall E. Walker</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="assets/images/users/user-6.jpg" alt="user-img"
                                                                  class="img-fluid rounded-circle"/></div>
                                    <p class="notify-details"><b>David M. Ryan</b><span class="text-muted">You have 87 unread messages</span>
                                    </p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-all">
                                View All
                            </a>

                        </div>
                    </li>
                    <!-- notification-->
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                           role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell-outline noti-icon"></i>
                            <span class="badge badge-success badge-pill noti-icon-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <span class="badge badge-danger float-right">84</span>
                                <h5>Notification</h5>
                            </div>

                            <div class="slimscroll" style="max-height: 230px;">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-martini"></i></div>
                                    <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span>
                                    </p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                    <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span>
                                    </p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-all">
                                View All
                            </a>

                        </div>

                    </li>
                    <!-- configuration settings-->
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                           role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-settings noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg">
                            <ul class="navigation-menu">

                                <li class="has-submenu">
                                    <a href="<?= base_url(); ?>dashboard/"><i
                                                class="dripicons-meter"></i><?= $this->lang->line('Dashboard') ?></a>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-briefcase"></i><?php echo $this->lang->line('sales') ?></a>
                                    <ul class="submenu megamenu">
                                        <li>
                                            <ul>
                                                <li><a href="ui-alerts.html"><?php echo $this->lang->line('pos sales') ?></a></li>
                                                <ul>
                                                    <li>
                                                        <a href="ui-buttons.html"><?php echo $this->lang->line('New Invoice'); ?></a>
                                                    </li>
                                                    <li><a href="ui-badge.html"><?= $this->lang->line('New Invoice'); ?>V2 -
                                                            Mobile</a></li>
                                                    <li>
                                                        <a href="ui-cards.html"><?php echo $this->lang->line('Manage Invoices'); ?></a>
                                                    </li>
                                                </ul>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li><a href="ui-modals.html"><?php echo $this->lang->line('sales') ?></a></li>
                                                <ul>
                                                    <li><a href="ui-images.html"><?php echo $this->lang->line('New Invoice'); ?></a>
                                                    </li>
                                                    <li>
                                                        <a href="ui-progressbars.html"><?php echo $this->lang->line('Manage Invoices'); ?></a>
                                                    </li>
                                                </ul>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li><a href="ui-carousel.html"><?php echo $this->lang->line('Quotes') ?></a></li>
                                                <ul>
                                                    <li><a href="ui-video.html"><?php echo $this->lang->line('New Quote'); ?></a>
                                                    </li>
                                                    <li>
                                                        <a href="ui-typography.html"><?php echo $this->lang->line('Manage Quotes'); ?></a>
                                                    </li>
                                                </ul>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li><a href="ui-carousel.html"><?php echo $this->lang->line('Subscriptions') ?></a></li>
                                                <ul>
                                                    <li><a href="ui-video.html"><?php echo $this->lang->line('New Subscription'); ?></a>
                                                    </li>
                                                    <li>
                                                        <a href="ui-typography.html"><?php echo $this->lang->line('Subscriptions'); ?></a>
                                                    </li>
                                                </ul>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li><a href="ui-carousel.html"><?php echo $this->lang->line('Credit Notes'); ?></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-broadcast"></i>Advanced UI</a>
                                    <ul class="submenu">
                                        <li><a href="advanced-alertify.html">Alertify</a></li>
                                        <li><a href="advanced-rating.html">Rating</a></li>
                                        <li><a href="advanced-nestable.html">Nestable</a></li>
                                        <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                                        <li><a href="advanced-sweet-alert.html">Sweet-Alert</a></li>
                                        <li><a href="advanced-lightbox.html">Lightbox</a></li>
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-view-thumb"></i>Components</a>
                                    <ul class="submenu">
                                        <li class="has-submenu">
                                            <a href="#">Forms</a>
                                            <ul class="submenu">
                                                <li><a href="../pos/form-elements.html">Form Elements</a></li>
                                                <li><a href="form-validation.html">Form Validation</a></li>
                                                <li><a href="form-advanced.html">Form Advanced</a></li>
                                                <li><a href="form-editors.html">Form Editors</a></li>
                                                <li><a href="form-uploads.html">Form File Upload</a></li>
                                                <li><a href="form-mask.html">Form Mask</a></li>
                                                <li><a href="form-summernote.html">Summernote</a></li>
                                                <li><a href="form-xeditable.html">Form Xeditable</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#">Icons</a>
                                            <ul class="submenu">
                                                <li><a href="icons-material.html">Material Design</a></li>
                                                <li><a href="icons-ion.html">Ion Icons</a></li>
                                                <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                                <li><a href="icons-themify.html">Themify Icons</a></li>
                                                <li><a href="icons-dripicons.html">Dripicons</a></li>
                                                <li><a href="icons-typicons.html">Typicons Icons</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="calendar.html">Calendar</a>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#">Tables </a>
                                            <ul class="submenu">
                                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                                <li><a href="tables-datatable.html">Data Table</a></li>
                                                <li><a href="tables-responsive.html">Responsive Table</a></li>
                                                <li><a href="tables-editable.html">Editable Table</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#">Maps</a>
                                            <ul class="submenu">
                                                <li><a href="maps-google.html"> Google Map</a></li>
                                                <li><a href="maps-vector.html"> Vector Map</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                            </ul>

                        </div>

                    </li>
                    <!-- User-->
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown"
                           href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <img src="<?php echo base_url('userfiles/employee/thumbnail/' . $this->aauth->get_user()->picture) ?>"
                                 alt="avatar" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                            <a class="dropdown-item" href="<?php echo base_url(); ?>user/profile"><i
                                        class="mdi mdi-account-circle m-r-5 text-muted"></i> <?php echo $this->lang->line('Profile') ?>
                            </a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>user/attendance"><i
                                        class="mdi mdi-format-list-numbers m-r-5 text-muted"></i> <?php echo $this->lang->line('Attendance') ?>
                            </a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>user/holidays"><span
                                        class="badge badge-success mt-1 float-right">5</span><i
                                        class="mdi mdi-beach m-r-5 text-muted"></i> <?php echo $this->lang->line('Holidays') ?>
                            </a>

                            <a class="dropdown-item" href="<?php echo base_url('user/logout'); ?>"><i
                                        class="mdi mdi-logout m-r-5 text-muted"></i> <?php echo $this->lang->line('Logout') ?>
                            </a>
                        </div>

                    </li>

                    <li class="menu-item list-inline-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                </ul>
            </div>
            <!-- end menu-extras -->

            <div class="clearfix"></div>

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->

    <!-- MENU Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href="<?= base_url(); ?>dashboard/"><i
                                    class="dripicons-meter"></i><?= $this->lang->line('Dashboard') ?></a>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="dripicons-briefcase"></i><?php echo $this->lang->line('sales') ?></a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="ui-alerts.html"><?php echo $this->lang->line('pos sales') ?></a></li>
                                    <ul>
                                        <li>
                                            <a href="ui-buttons.html"><?php echo $this->lang->line('New Invoice'); ?></a>
                                        </li>
                                        <li><a href="ui-badge.html"><?= $this->lang->line('New Invoice'); ?>V2 -
                                                Mobile</a></li>
                                        <li>
                                            <a href="ui-cards.html"><?php echo $this->lang->line('Manage Invoices'); ?></a>
                                        </li>
                                    </ul>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><a href="ui-modals.html"><?php echo $this->lang->line('sales') ?></a></li>
                                    <ul>
                                        <li><a href="ui-images.html"><?php echo $this->lang->line('New Invoice'); ?></a>
                                        </li>
                                        <li>
                                            <a href="ui-progressbars.html"><?php echo $this->lang->line('Manage Invoices'); ?></a>
                                        </li>
                                    </ul>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><a href="ui-carousel.html"><?php echo $this->lang->line('Quotes') ?></a></li>
                                    <ul>
                                        <li><a href="ui-video.html"><?php echo $this->lang->line('New Quote'); ?></a>
                                        </li>
                                        <li>
                                            <a href="ui-typography.html"><?php echo $this->lang->line('Manage Quotes'); ?></a>
                                        </li>
                                    </ul>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><a href="ui-carousel.html"><?php echo $this->lang->line('Subscriptions') ?></a></li>
                                    <ul>
                                        <li><a href="ui-video.html"><?php echo $this->lang->line('New Subscription'); ?></a>
                                        </li>
                                        <li>
                                            <a href="ui-typography.html"><?php echo $this->lang->line('Subscriptions'); ?></a>
                                        </li>
                                    </ul>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><a href="ui-carousel.html"><?php echo $this->lang->line('Credit Notes'); ?></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="dripicons-broadcast"></i>Advanced UI</a>
                        <ul class="submenu">
                            <li><a href="advanced-alertify.html">Alertify</a></li>
                            <li><a href="advanced-rating.html">Rating</a></li>
                            <li><a href="advanced-nestable.html">Nestable</a></li>
                            <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                            <li><a href="advanced-sweet-alert.html">Sweet-Alert</a></li>
                            <li><a href="advanced-lightbox.html">Lightbox</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="dripicons-view-thumb"></i>Components</a>
                        <ul class="submenu">
                            <li class="has-submenu">
                                <a href="#">Forms</a>
                                <ul class="submenu">
                                    <li><a href="../pos/form-elements.html">Form Elements</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-advanced.html">Form Advanced</a></li>
                                    <li><a href="form-editors.html">Form Editors</a></li>
                                    <li><a href="form-uploads.html">Form File Upload</a></li>
                                    <li><a href="form-mask.html">Form Mask</a></li>
                                    <li><a href="form-summernote.html">Summernote</a></li>
                                    <li><a href="form-xeditable.html">Form Xeditable</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#">Icons</a>
                                <ul class="submenu">
                                    <li><a href="icons-material.html">Material Design</a></li>
                                    <li><a href="icons-ion.html">Ion Icons</a></li>
                                    <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                    <li><a href="icons-themify.html">Themify Icons</a></li>
                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="icons-typicons.html">Typicons Icons</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="calendar.html">Calendar</a>
                            </li>
                            <li class="has-submenu">
                                <a href="#">Tables </a>
                                <ul class="submenu">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Table</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#">Maps</a>
                                <ul class="submenu">
                                    <li><a href="maps-google.html"> Google Map</a></li>
                                    <li><a href="maps-vector.html"> Vector Map</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="dripicons-graph-bar"></i>Charts</a>
                        <ul class="submenu">
                            <li><a href="charts-morris.html">Morris Chart</a></li>
                            <li><a href="charts-chartist.html">Chartist Chart</a></li>
                            <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                            <li><a href="charts-flot.html">Flot Chart</a></li>
                            <li><a href="charts-c3.html">C3 Chart</a></li>
                            <li><a href="charts-other.html">Jquery Knob Chart</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="dripicons-copy"></i>Pages</a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="pages-pricing.html">Pricing</a></li>
                                    <li><a href="pages-invoice.html">Invoice</a></li>
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                    <li><a href="pages-faqs.html">FAQs</a></li>
                                    <li><a href="pages-blank.html">Blank Page</a></li>
                                    <li><a href="pages-login.html">Login</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="pages-404.html">Error 404</a></li>
                                    <li><a href="pages-500.html">Error 500</a></li>
                                    <li><a href="pages-maintenance.html">Maintenance</a></li>
                                    <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
                <!-- End navigation menu -->
            </div> <!-- end #navigation -->
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->


<div class="wrapper">
    <div class="container-fluid">