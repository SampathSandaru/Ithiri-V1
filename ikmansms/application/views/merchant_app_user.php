<?php include_once('header.php') ;?>




            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
   <a href="<?php echo base_url()?>Merchant" type="button" class="btn btn-success waves-effect waves-light">
                                    <i class="bx bx-back font-size-16 align-middle me-2"></i>          Back To Merchant
</a>
      
                    
                   
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">

                                 <a  type="button" data-bs-toggle="modal" data-bs-target="#myModal1" class="btn btn-success waves-effect waves-light">
                                    Add App Users</a>
<br>

  <div id="myModal1" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">

                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel">Add New App Users</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <div class="card">
                               
                                        <div class="card-body">
                                            <form class="needs-validation"  method="post"  action="<?php echo base_url()?>Merchant/AddNewAppUsers" novalidate>
                                                
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom03">Username</label>
                                                            <input type="text" class="form-control" id="validationCustom03" placeholder="Username" name="username" required>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid username.
                                                            </div>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                       <input type="hidden"  name="id" value="<?php echo $id?>" >
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom04">Password</label>
                                                            <input type="password" class="form-control" id="validationCustom04" placeholder="Password"  name="password" required>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid passord.
                                                            </div>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom02">Admin Status</label>
                                                            <select class="form-control" id="sel1" name="status">
                                                           
                                                                <option value="1">Active</option>
                                                                <option value="0">Inactive</option>
                                                            
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please select admin status.
                                                            </div>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                        
                                                           <button class="btn btn-success" type="submit">Submit</button>
                                                    </form>
                                                    </div>
                                                  </div>
                                                </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            

                                        <!--<h4 class="card-title">App Users</h4>-->
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
                                                                                          
                                                <th>Status</th>
                                                
                                             
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                         <?php

                                        $i=1;
                                        foreach($merchant_app_list->result() as $row) :
                                            $i++;
                                        ?>       
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $row->mer_user_username;?></td>
                                               
                                                <td>  <?php echo $row->mer_user_status == 1 ? 'Active':'Inactive';?></td>
                                            
                                               
                                            </tr>
                                            
                                 <?php   endforeach ; ?>
                                           
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
