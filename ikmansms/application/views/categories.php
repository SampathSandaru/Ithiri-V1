<?php include_once('header.php') ;?>




            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">



                    <?php
                    
                    if($message=="success"){



                        echo '<div class="alert alert-success" role="alert">
                    Successfully Saved
                    </div>';

                    }
                    
                    
                    if($message=="fail"){


                        echo '<div class="alert alert-danger" role="alert">
                      Please Try Again
                        </div>';


                    }
                    
                    ?>

                    
                    <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
<h4 class="card-title"> Customer Level Registration</h4>
                                    <a  type="button" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-success waves-effect waves-light">
                                 Add New Level</a>

                                        <!-- <h4 class="card-title">Add New Merchants</h4> -->
                                        <!-- <p class="card-title-desc">Provide valuable, actionable feedback to your users with HTML5 form validation–available in all our supported browsers.</p> -->
                                    </div>



                                          <!-- <i class="bx bx-remove-alt" data-bs-toggle="modal" data-bs-target="#myModal">EDIT</i>  -->

                                                             
                                                                                            <!-- sample modal content -->
                                   <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Customer Level List</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                           <form class="needs-validation" method="post" id="adminform"  action="<?php echo base_url()?>Category/Add" novalidate>           
                                      <div class="card-body">
                                        
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Name</label>
                                                        <input type="text" class="form-control" id="validationCustom01"  placeholder="Category Name" name="name" maxlength="30" required>
                                                        <div class="invalid-feedback">
                                                        Please enter the merchant name.
                                                        </div>

                                                        
                                                    </div>
                                                </div>
                                              
                                            </div>
                                          
                                            <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Status</label>
                                                        <select class="form-control" id="sel1"  name="status">
                                                            <option value="1">Active</option>
                                                            <option value="0">Inactive</option>
                                                         
                                                        </select>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                             </div>
                                            
                                             <!--<button class="btn btn-success" type="submit">Save</button>-->
                                       
                                             </div>


                                                        </div>
                                                        <div class="modal-footer">
                                                              <button type="submit" class="btn btn-success waves-effect waves-light">Save</button> 
                                                            <button type="button" class="btn btn-secondary waves-effect" onclick="resetForm()" data-bs-dismiss="modal">Close</button>
                                                        
                                                        </div>

                                            </form>

                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                </div>
                                <!-- end card -->
                            </div> <!-- end col -->
  
                        </div>
                        <!-- end row -->




                        <!-- start page title -->
                        <!-- <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Admin List</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">DataTables</li>
                                        </ol>
                                    </div> 

                                </div>
                            </div>
                        </div> -->
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Customer Level List</h4>
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
                                                <th>Level</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>



                                        <?php

                                        $i=1;
                                        foreach($category_list->result() as $row) :
                                        ?>


                                    <tr>     



                  

                                            <td><?php echo $i++;?></td>
                                             
                                                <td><?php echo $row->level_name;?></td>
                                                <td><?php echo $row->status == "1"?"Active":"Inactive";?></td>

                 
                                                
                                                
                                                <td>
                                                  


                                                <i class="bx bx-edit-alt" data-bs-toggle="modal" data-bs-target="#myModal<?php echo  $row->customer_level_id?>"></i> 

                                                                       <div id="myModal<?php echo  $row->customer_level_id?>" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Update Customer Level</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                           <form class="needs-validation" method="post"  action="<?php echo base_url()?>Category/Update" novalidate>           
                                            <div class="card-body">
                                        
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Name</label>
                                                        <input type="text" class="form-control" id="validationCustom01"  placeholder="Merchant Name" name="name"  value="<?php echo $row->level_name;?>">
                                                        <div class="invalid-feedback">
                                                        Please enter the merchant name.
                                                        </div>

                                                        
                                                    </div>
                                                </div>
                                              
                                            </div>
                                          
                                            <input type="hidden" class="form-control" id="validationCustom01"   name="id"  value="<?php echo $row->customer_level_id;?>">

                                            <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Status</label>
                                                        
                                                                          <select class="form-control" id="sel1"  name="status">
                                                                                     <?php echo $row->status == 1 ? ' <option value="1">Active</option>' : ' <option value="0">Inactive</option>'; ?>
                                                                                     
                                                                                       <?php    echo   $row->status == 1 ?'<option style="display:none"></option>':'<option value="1">Active</option>';?>   
                                                                                        <?php    echo   $row->status == 0 ?'<option style="display:none"></option>':'<option value="0">Inactive</option>';?>   
                                            
                                                                     </select>   
                                                                     
                                                        <!--<select class="form-control" id="sel1" name="status">-->
                                                        <!--    <?php echo $row->cust_status == 1 ? ' <option value="1">Active</option>':' <option value="0">Inactive</option>';  ?>-->
                                                        <!--    <option value="1">Active</option>-->
                                                        <!--    <option value="0">Inactive</option>-->
                                                         
                                                        <!--</select>-->
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                             </div>
                                            
                                             <!--<button class="btn btn-success" type="submit">Save</button>-->
                                       
                                             </div>


                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                                                        </div>

                                            </form>

                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->        

                                         
                                            </td>




                                                 <?php   endforeach ; ?>
                                           
                                               
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
