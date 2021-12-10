<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/minia/layouts/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Sep 2021 08:02:41 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Ithiri - Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Ithiri - Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
       <!-- <link rel="shortcut icon" href="<?php echo base_url();?>/public/assets/images/fev.png">-->
        <!-- plugin css -->
       <!-- <link href="<?php echo base_url();?>/public/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />-->
       <!-- Bootstrap Css -->
       <!-- <link href="<?php echo base_url();?>/public/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />-->
        <!-- Icons Css -->
       <!-- <link href="<?php echo base_url();?>/public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />-->
        <!-- App Css-->
       <!-- <link href="<?php echo base_url();?>/public/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />-->

       <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
       
               <!-- DataTables -->
        <link href="<?php echo base_url();?>/public/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>/public/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="<?php echo base_url();?>/public/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 

        <!-- preloader css -->
        <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="<?php echo base_url();?>/public/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo base_url();?>/public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo base_url();?>/public/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />



        <style>
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
	color: #4c6d24;
}
.mm-active .active svg {
	color: #24991b !important;
	fill: rgba(81,86,190,.2) !important;
}

 #page-topbar {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1002;
            background-color:rgba(4,30,17,255);
            border-bottom: 1px solid #e9e9ef;
        }
                    
        .navbar-brand-box {
	padding: 0 1.5rem;

    background-color:rgba(4,30,17,255);
	border-right: 1px solid rgba(4,30,17,255);
	-webkit-box-shadow: 0 2px 2px #fbfaff;
	box-shadow: 0 2px 2px #fbfaff;
}
.vertical-menu {

	z-index: 1001;
    background-color:rgba(4,30,17,255);
	bottom: 0;
	margin-top: 0;
	position: fixed;
	top: 70px;
	border-right: 1px solid #e9e9ef;
}

/* .mm-active .active {*/
/*	color: #e4ffd2 !important;*/
	
	
/*}*/
/*.mm-active .active {*/
/*	color: #e4ffd2 !important;*/
/*}*/
.page-item.active .page-link {
	z-index: 3;
	color: #fff;
	background-color: #a2a19b;
	border-color: #f4f4f4;
}

#sidebar-menu ul li a svg {
	color: #fff;
	fill: rgba(255, 255, 255, 0.2);
}
.mm-active .active svg :hover {
	color: #405040 !important;
	fill: rgba(81,86,190,.2) !important;
}

.navbar-brand-box {
	padding: 0 1.5rem;

	background-color: rgba(4,30,17,255);
	border-right: 1px solid rgba(4,30,17,255);
	-webkit-box-shadow: 0 2px 2px #fbfaff;
	box-shadow: 0 2px 2px #000;
}



.metismenu li : hover {
    background-color: #88c934 !important;
	display: block;
	width: 100%;
}


.mm-active  :hover {
	color: #88c934. !important;
	

}

#sidebar-menu ul li a svg .active{
	color: #e4ffd2 !important;
}

#sidebar-menu ul li a svg {
	color: #88c934 !important;
}

#sidebar-menu ul li :hover {
	background-color: #405040  !important;
	color: #88c934 !important;
}

#sidebar-menu ul li :hover {
	background-color: #405040  !important;
	color: #88c934 !important;
}

#sidebar-menu ul li a svg {
	color: #fff;
	fill: rgba(0, 0, 0, 0);
}
#sidebar-menu ul li a {
	display: block;
	padding: .62rem 1.5rem;
	/* color: #545a6d; */
	position: relative;
	font-size: .9rem;
	/* -webkit-transition: all .4s; */
	 transition: none; 
	font-weight: 500;
}


 .btn-info {
	color: #fff;
	background-color: #88c934  !important;
	border-color: #88c934  !important;
}
   
   .bx-remove-alt{
       
       font-size:14px;
       
   }
   
   .btn-primary{
       	color: #fff;
	background-color: #88c934  !important;
	border-color: #88c934  !important;
   }
   
   
   .menu-padding{
       margin-top:10px;
   }
   
   #datatable_filter{
       
       display:none;
       
   }

.mm-active .active {
	color: #e4ffd2 !important;
}
#sidebar-menu ul li a {
    display: block;
    padding: .62rem 1.5rem;
    color: #8ac841;
    position: relative;
    font-size: .9rem;
    -webkit-transition: all .4s;
    transition: none;
    font-weight: 500;
}
        </style>

    </head>


    <body>

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
        <header id="page-topbar" class="main_color">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box" href="<?php echo base_url()?>Merchant">
                            <a href="<?php echo base_url()?>Admin" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?php echo base_url();?>/public/assets/images/fev_icon.png" alt="" height="24" >
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo base_url();?>/public/assets/images/logo.png" alt="" height="84" width="150px"> <span class="logo-txt"></span>
                                </span>
                            </a>

                            <!-- <a href="merchant.php" class="logo logo-light">
                                <span class="logo-sm">
                                <img src="assets/images/fev.png" alt="" height="24" >
                                </span>
                                <span class="logo-lg">
                                <img src="assets/images/logo.jpg" alt="" height="84" width="150px">
                                </span>
                            </a> -->
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item menu-padding" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
        <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                           
                        </div>
                    </form>
                        
                    </div>

                    <div class="d-flex">

                       
                   

                        <div class="dropdown d-inline-block">
                        <a class="dropdown-item" href="<?php echo base_url()?>Login/Logout"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                            <!-- <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium">Shawn L.</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button> -->
                            <!-- <div class="dropdown-menu dropdown-menu-end">
                             
                                <a class="dropdown-item" href="apps-contacts-profile.html"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="auth-logout.html"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                            </div> -->
                        </div>

                    </div>
                </div>
            </header>
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu" class="main_color">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" data-key="t-menu">Menu</li>
                            <li class="nav_hove">
                                <a href="<?php echo base_url('index.php/user_customer/User_customer/index')?>">
                                     <img src="<?php echo base_url()?>/public/assets/marchant.svg" style="width:20px;height:20px" />
                                    <span data-key="t-dashboard"  >User</span>
                                </a>
                            </li>


                            <!-- <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="grid"></i>
                                    <span data-key="t-apps">Apps</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="apps-calendar.html">
                                            <span data-key="t-calendar">Calendar</span>
                                        </a>
                                    </li>
        
                                    <li>
                                        <a href="apps-chat.html">
                                            <span data-key="t-chat">Chat</span>
                                        </a>
                                    </li>
        
                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow">
                                            <span data-key="t-email">Email</span>
                                        </a>
                                        <ul class="sub-menu" aria-expanded="false">
                                            <li><a href="apps-email-inbox.html" data-key="t-inbox">Inbox</a></li>
                                            <li><a href="apps-email-read.html" data-key="t-read-email">Read Email</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow">
                                            <span data-key="t-invoices">Invoices</span>
                                        </a>
                                        <ul class="sub-menu" aria-expanded="false">
                                            <li><a href="apps-invoices-list.html" data-key="t-invoice-list">Invoice List</a></li>
                                            <li><a href="apps-invoices-detail.html" data-key="t-invoice-detail">Invoice Detail</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow">
                                            <span data-key="t-contacts">Contacts</span>
                                        </a>
                                        <ul class="sub-menu" aria-expanded="false">
                                            <li><a href="apps-contacts-grid.html" data-key="t-user-grid">User Grid</a></li>
                                            <li><a href="apps-contacts-list.html" data-key="t-user-list">User List</a></li>
                                            <li><a href="apps-contacts-profile.html" data-key="t-profile">Profile</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="users"></i>
                                    <span data-key="t-authentication">Authentication</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="auth-login.html" data-key="t-login">Login</a></li>
                                    <li><a href="auth-register.html" data-key="t-register">Register</a></li>
                                    <li><a href="auth-recoverpw.html" data-key="t-recover-password">Recover Password</a></li>
                                    <li><a href="auth-lock-screen.html" data-key="t-lock-screen">Lock Screen</a></li>
                                    <li><a href="auth-logout.html" data-key="t-logout">Log Out</a></li>
                                    <li><a href="auth-confirm-mail.html" data-key="t-confirm-mail">Confirm Mail</a></li>
                                    <li><a href="auth-email-verification.html" data-key="t-email-verification">Email Verification</a></li>
                                    <li><a href="auth-two-step-verification.html" data-key="t-two-step-verification">Two Step Verification</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="file-text"></i>
                                    <span data-key="t-pages">Pages</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-starter.html" data-key="t-starter-page">Starter Page</a></li>
                                    <li><a href="pages-maintenance.html" data-key="t-maintenance">Maintenance</a></li>
                                    <li><a href="pages-comingsoon.html" data-key="t-coming-soon">Coming Soon</a></li>
                                    <li><a href="pages-timeline.html" data-key="t-timeline">Timeline</a></li>
                                    <li><a href="pages-faqs.html" data-key="t-faqs">FAQs</a></li>
                                    <li><a href="pages-pricing.html" data-key="t-pricing">Pricing</a></li>
                                    <li><a href="pages-404.html" data-key="t-error-404">Error 404</a></li>
                                    <li><a href="pages-500.html" data-key="t-error-500">Error 500</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="layouts-horizontal.html">
                                    <i data-feather="layout"></i>
                                    <span data-key="t-horizontal">Horizontal</span>
                                </a>
                            </li>

                            <li class="menu-title mt-2" data-key="t-components">Elements</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="briefcase"></i>
                                    <span data-key="t-components">Components</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ui-alerts.html" data-key="t-alerts">Alerts</a></li>
                                    <li><a href="ui-buttons.html" data-key="t-buttons">Buttons</a></li>
                                    <li><a href="ui-cards.html" data-key="t-cards">Cards</a></li>
                                    <li><a href="ui-carousel.html" data-key="t-carousel">Carousel</a></li>
                                    <li><a href="ui-dropdowns.html" data-key="t-dropdowns">Dropdowns</a></li>
                                    <li><a href="ui-grid.html" data-key="t-grid">Grid</a></li>
                                    <li><a href="ui-images.html" data-key="t-images">Images</a></li>
                                    <li><a href="ui-modals.html" data-key="t-modals">Modals</a></li>
                                    <li><a href="ui-offcanvas.html" data-key="t-offcanvas">Offcanvas</a></li>
                                    <li><a href="ui-progressbars.html" data-key="t-progress-bars">Progress Bars</a></li>
                                    <li><a href="ui-tabs-accordions.html" data-key="t-tabs-accordions">Tabs & Accordions</a></li>
                                    <li><a href="ui-typography.html" data-key="t-typography">Typography</a></li>
                                    <li><a href="ui-video.html" data-key="t-video">Video</a></li>
                                    <li><a href="ui-general.html" data-key="t-general">General</a></li>
                                    <li><a href="ui-colors.html" data-key="t-colors">Colors</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="gift"></i>
                                    <span data-key="t-ui-elements">Extended</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="extended-lightbox.html" data-key="t-lightbox">Lightbox</a></li>
                                    <li><a href="extended-rangeslider.html" data-key="t-range-slider">Range Slider</a></li>
                                    <li><a href="extended-sweet-alert.html" data-key="t-sweet-alert">SweetAlert 2</a></li>
                                    <li><a href="extended-session-timeout.html" data-key="t-session-timeout">Session Timeout</a></li>
                                    <li><a href="extended-rating.html" data-key="t-rating">Rating</a></li>
                                    <li><a href="extended-notifications.html" data-key="t-notifications">Notifications</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="box"></i>
                                    <span class="badge rounded-pill bg-soft-danger text-danger float-end">7</span>
                                    <span data-key="t-forms">Forms</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="form-elements.html" data-key="t-form-elements">Basic Elements</a></li>
                                    <li><a href="form-validation.html" data-key="t-form-validation">Validation</a></li>
                                    <li><a href="form-advanced.html" data-key="t-form-advanced">Advanced Plugins</a></li>
                                    <li><a href="form-editors.html" data-key="t-form-editors">Editors</a></li>
                                    <li><a href="form-uploads.html" data-key="t-form-upload">File Upload</a></li>
                                    <li><a href="form-wizard.html" data-key="t-form-wizard">Wizard</a></li>
                                    <li><a href="form-mask.html" data-key="t-form-mask">Mask</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="sliders"></i>
                                    <span data-key="t-tables">Tables</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="tables-basic.html" data-key="t-basic-tables">Bootstrap Basic</a></li>
                                    <li><a href="tables-datatable.html" data-key="t-data-tables">DataTables</a></li>
                                    <li><a href="tables-responsive.html" data-key="t-responsive-table">Responsive</a></li>
                                    <li><a href="tables-editable.html" data-key="t-editable-table">Editable</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="pie-chart"></i>
                                    <span data-key="t-charts">Charts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="charts-apex.html" data-key="t-apex-charts">Apexcharts</a></li>
                                    <li><a href="charts-echart.html" data-key="t-e-charts">Echarts</a></li>
                                    <li><a href="charts-chartjs.html" data-key="t-chartjs-charts">Chartjs</a></li>
                                    <li><a href="charts-knob.html" data-key="t-knob-charts">Jquery Knob</a></li>
                                    <li><a href="charts-sparkline.html" data-key="t-sparkline-charts">Sparkline</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="cpu"></i>
                                    <span data-key="t-icons">Icons</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="icons-boxicons.html" data-key="t-boxicons">Boxicons</a></li>
                                    <li><a href="icons-materialdesign.html" data-key="t-material-design">Material Design</a></li>
                                    <li><a href="icons-dripicons.html" data-key="t-dripicons">Dripicons</a></li>
                                    <li><a href="icons-fontawesome.html" data-key="t-font-awesome">Font Awesome 5</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="map"></i>
                                    <span data-key="t-maps">Maps</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="maps-google.html" data-key="t-g-maps">Google</a></li>
                                    <li><a href="maps-vector.html" data-key="t-v-maps">Vector</a></li>
                                    <li><a href="maps-leaflet.html" data-key="t-l-maps">Leaflet</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="share-2"></i>
                                    <span data-key="t-multi-level">Multi Level</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);" data-key="t-level-1-1">Level 1.1</a></li>
                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow" data-key="t-level-1-2">Level 1.2</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="javascript: void(0);" data-key="t-level-2-1">Level 2.1</a></li>
                                            <li><a href="javascript: void(0);" data-key="t-level-2-2">Level 2.2</a></li>
                                        </ul>lo
                                    </li>
                                </ul>
                            </li>

                        </ul>

                        <div class="card sidebar-alert border-0 text-center mx-4 mb-0 mt-5">
                            <div class="card-body">
                                <img src="assets/images/giftbox.png" alt="">
                                <div class="mt-4">
                                    <h5 class="alertcard-title font-size-16">Unlimited Access</h5>
                                    <p class="font-size-13">Upgrade your plan from a Free trial, to select ‘Business Plan’.</p>
                                    <a href="#!" class="btn btn-primary mt-2">Upgrade Now</a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->