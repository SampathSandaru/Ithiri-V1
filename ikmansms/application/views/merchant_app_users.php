<?php include_once('header.php') ;?>




            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                    <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                    <a href="merchant.php" type="button" class="btn btn-success waves-effect waves-light">
                                    <i class="bx bx-back font-size-16 align-middle me-2"></i>          Back To Marchent
                                    </a>

                                    <br>       <br>

                                        <h4 class="card-title">Add New Merchants</h4>
                                        <!-- <p class="card-title-desc">Provide valuable, actionable feedback to your users with HTML5 form validation–available in all our supported browsers.</p> -->
                                    </div>
                                    <div class="card-body">
                                        <form class="needs-validation" novalidate>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Merchant Name</label>
                                                        <input type="text" class="form-control" id="validationCustom01"  placeholder="First name" name="name" required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                <div class="mb-3">
                                                        <label class="form-label" for="validationCustom03">Business Registration</label>
                                                        <input type="text" class="form-control" id="validationCustom03" placeholder="City" name="username" required>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid username.
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-4">
                                                <div class="mb-3">
                                                  <br>
                                                <button class="btn btn-success" type="submit">Submit form</button>
                                                    </div>
                                                </div>

                                            </div>
                         
                             
                                            
                                          
                                        </form>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div> <!-- end col -->
  
                        </div>
                    
                   
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title"></h4>
                                        <!-- <p class="card-title-desc">DataTables has most features enabled by
                                            default, so all you need to do to use it with your own tables is to call
                                            the construction function: <code>$().DataTable();</code>.
                                        </p> -->
                                    </div>
                                    <div class="card-body">
        
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Username</th>
                                                <th>Password</th>                                 
                                                <th>Status</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <tr>
                                                <td>1122</td>
                                                <td>MG123</td>
                                               
                                                <td>*************</td>
                                                <th>Remove</th>
                                               
                                            </tr>
                                           
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                       
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
        </div>
                <?php include_once('footer.php') ;?>
