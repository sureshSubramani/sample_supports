<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/core.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/date-picker.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.ico">
    <!-- JavaScript files-->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/core.js"></script>
    <script src="<?php echo base_url();?>assets/js/date-picker.js"></script>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
        <div class="side-navbar-wrapper">
            <!-- Sidebar Header    -->
            <div class="sidenav-header d-flex align-items-center justify-content-center">
                <!-- User Info-->
                <div class="sidenav-header-inner text-center">
                    <h2 class="h5">Suresh Subramani</h2><span>Developer</span>
                </div>
                <!-- Small Brand information, appears on minimized sidebar-->
                <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center">
                    <strong>S</strong><strong class="text-primary">S</strong></a></div>
            </div>
            <!-- Sidebar Navigation Menus-->
            <div class="main-menu">
                <h5 class="sidenav-heading">General</h5>
                <ul id="side-main-menu" class="side-menu list-unstyled">
                    <li><a href="<?php echo base_url();?>dashboard"> <i class="icon-home"></i>Dashboard </a></li>
                    <li><a href="#"> <i class="icon-form"></i>Forms </a></li>
                    <li><a href="#"> <i class="fa fa-bar-chart"></i>Charts </a></li>
                    <li><a href="#"> <i class="icon-grid"></i>Tables </a></li>
                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i
                                class="icon-interface-windows"></i>Example dropdown </a>
                        <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                            <li><a href="#">Page</a></li>
                            <li><a href="#">Page</a></li>
                            <li><a href="#">Page</a></li>
                        </ul>
                    </li>
                    <li><a href="#"> <i class="icon-interface-windows"></i>Login page </a></li>
                    <li> <a href="#"> <i class="icon-mail"></i>Demo
                            <div class="badge badge-warning">6 New</div></a></li>
                </ul>
            </div>
            <!-- <div class="admin-menu">
                <h5 class="sidenav-heading">Second menu</h5>
                <ul id="side-admin-menu" class="side-menu list-unstyled">
                    <li> <a href="#"> <i class="icon-screen"> </i>Demo</a></li>
                    <li> <a href="#"> <i class="icon-flask"> </i>Demo
                            <div class="badge badge-info">Special</div></a></li>
                    <li> <a href=""> <i class="icon-flask"> </i>Demo</a></li>
                    <li> <a href=""> <i class="icon-picture"> </i>Demo</a></li>
                </ul>
            </div> -->
        </div>
    </nav>
    <div class="page">
        <!-- navbar-->
        <header class="header">
            <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-holder d-flex align-items-center justify-content-between">
                        <div class="navbar-header">
                            <a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"></i></a>
                            <a href="index.html" class="navbar-brand">
                                <div class="brand-text d-none d-md-inline-block"><span>Project</span><strong class="text-primary">Supports</strong></div>
                            </a></div>
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                            <!-- Notifications dropdown-->
                            <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    class="nav-link"><i class="fa fa-bell"></i><span
                                        class="badge badge-warning">12</span></a>
                                <ul aria-labelledby="notifications" class="dropdown-menu">
                                    <li><a rel="nofollow" href="#" class="dropdown-item">
                                            <div class="notification d-flex justify-content-between">
                                                <div class="notification-content"><i class="fa fa-envelope"></i>You have
                                                    6 new messages </div>
                                                <div class="notification-time"><small>4 minutes ago</small></div>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item">
                                            <div class="notification d-flex justify-content-between">
                                                <div class="notification-content"><i class="fa fa-twitter"></i>You have
                                                    2 followers</div>
                                                <div class="notification-time"><small>4 minutes ago</small></div>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item">
                                            <div class="notification d-flex justify-content-between">
                                                <div class="notification-content"><i class="fa fa-upload"></i>Server
                                                    Rebooted</div>
                                                <div class="notification-time"><small>4 minutes ago</small></div>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item">
                                            <div class="notification d-flex justify-content-between">
                                                <div class="notification-content"><i class="fa fa-twitter"></i>You have
                                                    2 followers</div>
                                                <div class="notification-time"><small>10 minutes ago</small></div>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                                            <strong> <i class="fa fa-bell"></i>view all notifications </strong></a></li>
                                </ul>
                            </li>
                            <!-- Messages dropdown-->
                            <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    class="nav-link"><i class="fa fa-envelope"></i><span
                                        class="badge badge-info">10</span></a>
                                <ul aria-labelledby="notifications" class="dropdown-menu">
                                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                            <div class="msg-profile"> <img src="assets/img/avatar-1.jpg" alt="..."
                                                    class="img-fluid rounded-circle"></div>
                                            <div class="msg-body">
                                                <h3 class="h5">Jason Doe</h3><span>sent you a direct
                                                    message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                            <div class="msg-profile"> <img src="assets/img/avatar-2.jpg" alt="..."
                                                    class="img-fluid rounded-circle"></div>
                                            <div class="msg-body">
                                                <h3 class="h5">Frank Williams</h3><span>sent you a direct
                                                    message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                            <div class="msg-profile"> <img src="assets/img/avatar-3.jpg" alt="..."
                                                    class="img-fluid rounded-circle"></div>
                                            <div class="msg-body">
                                                <h3 class="h5">Ashley Wood</h3><span>sent you a direct
                                                    message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                                            <strong> <i class="fa fa-envelope"></i>Read all messages </strong></a></li>
                                </ul>
                            </li>
                            <!-- Languages dropdown    -->
                            <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    class="nav-link language dropdown-toggle"><img src="assets/img/flags/16/GB.png"
                                        alt="English"><span class="d-none d-sm-inline-block">English</span></a>
                                <ul aria-labelledby="languages" class="dropdown-menu">
                                    <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="assets/img/flags/16/DE.png"
                                                alt="English" class="mr-2"><span>German</span></a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="assets/img/flags/16/FR.png"
                                                alt="English" class="mr-2"><span>French </span></a></li>
                                </ul>
                            </li>
                            <!-- Log out-->
                            <li class="nav-item"><a href="login.html" class="nav-link logout"> <span
                                        class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>