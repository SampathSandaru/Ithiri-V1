<?php include_once('header.php') ;?>




            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">


                        <div class="row">
                            <div class="col-12">
                                
                                   <div class="card" style="padding:20px">

                                                            <form   action="<?php echo base_url();?>ManageCustomer/getSearchResult">


                                                    <div class="row">

                                                        <div class="form-group col-md-8">
                                                                    
                                                         <input type="text" class="form-control"  placeholder="Customer ID" id="specificfield"  name="id" required>
                                                        <div class="valid-feedback">
                                                       Looks good
                                                        </div> 
                                                        <div class="invalid-feedback">
                                                        Please enter the customer id
                                                        </div>
                                                                        </div>

                                                                        <div class="form-group col-md-4">

                                                                            <button type="submit" class="btn btn-success">Search</button>
                                                                        
                                                                        </div>
            
                                                                </div>

                            

                                                      </form>
                                        </div>
                                        
                                
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Customers</h4>
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
                                                <th>Name</th>
                                                <th>Level</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                             
                                            </tr>
                                            </thead>
        
        
                                            <tbody>

                                              

                                            <?php

                                                $i=1;
                                                foreach($customer_list->result() as $row) :
                                                ?>
                                                
                                                
                                   <div id="myModal<?php echo  $row->cust_id?>" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Update Customer Information</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                  <div class="modal-body">
                                     <form class="needs-validation" method="post"  action="<?php echo base_url()?>ManageCustomer/Update" novalidate>
                                                <div class="card">
                                             <div class="card-body">
                                         


                                             <div class="row">
                                             <div class="col-md-12">
                                                    <div>
                                                        <label class="form-label" for="validationCustom01">ID</label>
                                                        <input type="text" class="form-control" id="validationCustom01"   value="<?php echo $row->cust_id;?>"  name="cust_id" readonly>
                                                       
                                                    </div>
                                                </div>

                                             <div class="col-md-12">
                                                    <div>
                                                        <label class="form-label" for="validationCustom01">Name</label>
                                                        <input type="text" class="form-control" id="validationCustom01"  value="<?php echo $row->cust_name;?>"  name="name" >
                                                        <div class="invalid-feedback">
                                                        Please enter the customer name.
                                                        </div>
                                                    </div>
                                                </div>

                                                <input type="hidden" value="<?php echo $row->cust_id;?>" name="id" >

                                            
                                            </div>
                                                                 <div class="col-md-12">
                                                <div >
                                                   
                                                           <label class="form-label" for="validationCustom01">Customer Level
                                                      </label>
                                                       
                                                       <select class="form-control" id="sel1" name="level">
                                                         <option value="<?php echo $row->customer_level_id;?>"><?php echo $row->level_name ;?></option>
                                                      <?php
        
                                                        $i=1;
                                                        foreach($customer_level->result() as $row1) :
                                                        ?>
                                                      
                                                       <?php 
                                                                    
                                                                               
                                               echo    $row1->customer_level_id ==  $row->customer_level_id ?'<option style="display:none"></option>':'  <option value='.$row1->customer_level_id.'>'.$row1->level_name .'</option>';?> 
                                     
                                                       <?php   endforeach ; ?>         
                                                        
                                                     </select>
                                                        
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <div >
                                                             <label class="form-label" for="validationCustom03">Customer Status
                                                       </label>  
                                                    
                                                   
                                                            
                                                               <select class="form-control" id="sel1"  name="status">
                                                                                     <?php echo $row->cust_status == 1 ? ' <option value="1">Active</option>' : ' <option value="0">Inactive</option>'; ?>
                                                                                     
                                                                                       <?php    echo   $row->cust_status == 1 ?'<option style="display:none"></option>':'<option value="1">Active</option>';?>   
                                                                                        <?php    echo   $row->cust_status == 0 ?'<option style="display:none"></option>':'<option value="0">Inactive</option>';?>   
                                            
                                                                     </select>                                                        
                                                    </div>
                                                </div>
                           
                                                                           
                                                 </div>
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

                                                 <tr> 

                                                <td><?php echo $row->cust_id;?></td>
                                                <td><?php echo $row->cust_name;?></td>
                                                <td><?php echo $row->level_name;?></td>
                                                 <td><?php echo $row->cust_status == "1"?"Active":"Inactive";?></td>
                                                <td>
                                            
                                                <i class="bx bx-edit-alt" data-bs-toggle="modal" data-bs-target="#myModal<?php echo  $row->cust_id?>"></i> 

                                            </td>


    
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
