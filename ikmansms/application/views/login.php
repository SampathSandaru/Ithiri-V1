<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/minia/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Sep 2021 08:02:26 GMT -->
<head>


        <meta charset="utf-8" />
        <title>Ithiri - Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Ithiri - Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url();?>/public/assets/images/fev.png">

        <!-- Bootstrap Css -->
        <link href="<?php echo base_url();?>public/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo base_url();?>public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo base_url();?>public/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

<style>
    
    body{
        
        background-color:#041e11;
        
    }
    
</style>
    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->
        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">
                 <center>   <div class="col-xxl-4 col-lg-4 col-md-4">
                        <div class="auth-full-page-content d-flex p-sm-5 p-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100">
                             
                                    <div class="auth-content my-auto">
                                        <div class="text-center">
                                              <img src="<?php echo base_url();?>/public/assets/images/logo.png" alt="" height="100"> 
                                        </div>
                                        
                                       <p style="color:red"> <?php echo $message;?></p>
                                        
                                        <form class="mt-4 pt-2" method="post" action="<?php echo base_url()?>Login/LoginValidation">
                                            <div class="mb-3">
                                                <label class="form-label">Username</label>
                                                <input type="text" class="form-control" name="username" id="username" placeholder="Enter username" required>
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-grow-1">
                                                        <label class="form-label">Password</label>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="">

                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="input-group auth-pass-inputgroup">
                                                    <input type="password" class="form-control" name="password" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" required>
                                                    <button class="btn btn-light shadow-none ms-0" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col">
                                                    <div class="form-check">
                                                       
                                                      
                                                    </div>  
                                                </div>
                                                
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn btn-success w-100 waves-effect waves-light" type="submit">Log In</button>
                                            </div>
                                        </form>

                                       

                                       
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- end auth full page content -->
                    </div></center>

                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>


        <!-- JAVASCRIPT -->
        <script src="<?php echo base_url();?>public/assets/libs/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url();?>public/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url();?>public/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?php echo base_url();?>public/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo base_url();?>public/assets/libs/node-waves/waves.min.js"></script>
        <script src="<?php echo base_url();?>public/assets/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="<?php echo base_url();?>public/assets/libs/pace-js/pace.min.js"></script>
        <!-- password addon init -->
        <script src="<?php echo base_url();?>public/assets/js/pages/pass-addon.init.js"></script>

    </body>


<!-- Mirrored from themesbrand.com/minia/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Sep 2021 08:02:26 GMT -->
</html>