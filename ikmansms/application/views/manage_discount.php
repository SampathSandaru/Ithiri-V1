
<?php include_once ('header.php'); ?>

 <div class="main-content">
    <div class="page-content">
       <div class="container-fluid">
           
                 <?php
                    if ($message == "success")
                    {
                    
                        echo '<div class="alert alert-success" role="alert">
                                        Successfully Saved
                                        </div>';
                    
                    }
                    
                    if ($message == "fail")
                    {
                    
                        echo '<div class="alert alert-danger" role="alert">
                                          Please Try Again
                                            </div>';
                    
                    }
                    
                    ?>

                    
                    <div class="row">
                            <div class="col-xl-12">
                                
                                
                                                                                           
                                   <div class="card" style="padding:20px">

                                                            <form id="search"  action="<?php echo base_url();?>ManageDiscount/SearchDiscount">


                                                               <center> <div class="row">

                                                                        <div class="form-group col-md-8">
                                                                    
                                                                            <input type="text" class="form-control"  placeholder="Search Discount...." id="specificfield"  name="name" required>
                                                   <div class="valid-feedback">
                                                       Looks good
                                                        </div> 
                                                        <div class="invalid-feedback">
                                                        Please enter the merchant name
                                                        </div>
                                                                        </div>

                                                                                          <div class="form-group col-md-4" align="left">

                                                                              <button type="submit" class="btn btn-success">Search</button>
                                                                             <button" class="btn btn-danger" onclick="clearSearch()">Reset</button>                                                                        
                                                                        </div>
            
                                                                </div> </center> 

                            

                                                      </form>
                                        </div>  
                                
                                
                                <div class="card">
                                    <div class="card-header">
                                <h4 class="card-title"> Discount Registration</h4>
                                    <a  type="button" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-success waves-effect waves-light">
                                    Add New Discount</a>

                                        <!-- <h4 class="card-title">Add New Merchants</h4> -->
                                        <!-- <p class="card-title-desc">Provide valuable, actionable feedback to your users with HTML5 form validation–available in all our supported browsers.</p> -->
                                    </div>


                                        <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        
                                     <form class="needs-validation" id="adminform" enctype="multipart/form-data" method="post"  action="<?php echo base_url() ?>ManageDiscount/Add" novalidate>          
                                                        
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Add New Discount</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="resetForm1()"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                       
                                      <div class="card-body">
                                       


                                        <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Merchant</label>
                                                        <select class="form-control" id="sel1"  name="merchant_id" required>
                                                              <option>-----Select Merchant Name-----</option>
                                                        <?php
                                                            $i = 1;
                                                            foreach ($merchant_list->result() as $row):
                                                            
                                                            ?>

                                                                <option value="<?php echo $row->mer_id; ?>"><?php echo $row->mer_name; ?></option>

                                                            <?php
endforeach; ?>
                                                         
                                                        </select>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>


                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Offer Title</label>
                                                        <input type="text" class="form-control" id="validationCustom04" name="offer_title" placeholder="Offer Title" maxlength="150"   required>
                                                        <div class="valid-feedback">
                                                         Looks good! 
                                                        </div>
                                                          <div class="invalid-feedback">
                                                        Please enter the valid offer title
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="mb-3">
                                                      <label class="form-label" for="validationCustom02">Discount Type</label>
                                                        <select class="form-control" id="sel1"  name="discount_type" onchange="validateDiscType(this.value)" required >
                                                             <option >----Discount Type----</option>
                                                            <option value="Barcode">Barcode</option>
                                                            <option value="QR Code">QR Code</option>
                                                             <option value="Online">Online</option>
                                                        </select>
                                                       <div class="valid-feedback">
                                                         Looks good! 
                                                        </div>
                                                          <div class="invalid-feedback">
                                                        Please select discount type
                                                        </div>
                                                    </div>
                                               </div>

                                                <div class="row">
                                                <div class="col-md-6">
                                                  <div class="mb-3">
                                                  <label class="form-label" for="validationCustom02">Phone Number</label>
                                                  <input type="text" class="form-control" id="validationCustom04" name="contact" onkeypress="return onlyNumberKey(event)" maxlength="13" placeholder="Contact Details">
                                                        <div class="valid-feedback">
                                                         Looks good! 
                                                        </div>

                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Expiry Date</label>
                                                        <input type="date" class="form-control" id="validationCustom04" name="valid_date" onkeydown="return false"  min="<?php echo date("Y-m-d"); ?>" placeholder="Expiry Date"  required>
                                                        <div class="valid-feedback">
                                                       Looks good! 
                                                        </div>
                                                         <div class="invalid-feedback">
                                                      Please select expire date
                                                        </div>

                                                    </div>
                                            </div>


                                                <div class="row">


                                                
                                                <div class="mb-12">
                                                        <label class="form-label" for="validationCustom01">Offer Description</label>
                                                        <textarea  class="form-control" id="validationCustom01"  placeholder="Offer Description" name="description" maxlength="300"></textarea>
                                                
                                                        <div class="invalid-feedback">
                                                        Please enter the offer description.
                                                        </div>

                                                        
                                                    </div>
                                                </div>

<br><br>                                                       
                                            <div class="row" style="margin-top:10px">
                                                <div class="col-md-6">

                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Customer Type</label>
                                                        <!--<select class="form-control" id="sel1"  name="customer_type">-->
                                                        <!--    <option value="1">Premium</option>-->
                                                        <!--    <option value="0">Non-Premium</option>-->
                                                         
                                                        <!--</select>-->
                                                        
                                                        
                                                      <select class="form-control" id="sel1" name="customer_type[]" multiple required>
                                                      <option disabled>----Customer Type----</option>
                                                   
                                                   

                                                     
                                                         <?php
                                                 
                                                            $i = 1;
                                                            foreach ($customer_type->result() as $row2):
                                                        ?>
                                                         <option value="<?php echo $row2->customer_level_id; ?>"><?php echo $row2->level_name; ?></option>
                                     
                                                       <?php
                                                    endforeach; ?>         
                                                        
                                                     </select>
                                                     
                                                     <div class="valid-feedback">
                                                         Looks good! 
                                                        </div>
                                                          <div class="invalid-feedback">
                                                       Please select customer type
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                     <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Locations </label>
                                                        <!--<select class="form-control" id="sel1"  name="customer_type">-->
                                                        <!--    <option value="1">Premium</option>-->
                                                        <!--    <option value="0">Non-Premium</option>-->
                                                         
                                                        <!--</select>-->
                                                        
                                                        
                                                      <select class="form-control" id="sel1" name="disc_location">
                                                      <option disabled>----Locations----</option>
                                                            <?php
                                                 
                                                            $i = 1;
                                                            foreach ($location_list->result() as $row3):
                                                        ?>
                                                         <option value="<?php echo $row3->location_id; ?>"><?php echo $row3->location_name; ?></option>
                                     
                                                       <?php
                                                    endforeach; ?>         
                                                        
                                                     </select>
                                                     
                                                     <div class="valid-feedback">
                                                         Looks good! 
                                                        </div>
                                                          <div class="invalid-feedback">
                                                       Please select location type
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                     <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Discount Type</label>
                                                        <!--<select class="form-control" id="sel1"  name="customer_type">-->
                                                        <!--    <option value="1">Premium</option>-->
                                                        <!--    <option value="0">Non-Premium</option>-->
                                                         
                                                        <!--</select>-->
                                                        
                                                        
                                                      <select class="form-control" id="sel1" name="main_category_type">
                                                      <option disabled>----Discount Type ----</option>
                                                            <?php
                                                 
                                                            $i = 1;
                                                            foreach ($discount_type_list->result() as $row4):
                                                        ?>
                                                         <option value="<?php echo $row4->disc_category_id; ?>"><?php echo $row4->category_name; ?></option>
                                     
                                                       <?php
                                                    endforeach; ?>         
                                                        
                                                     </select>
                                                     
                                                     <div class="valid-feedback">
                                                         Looks good! 
                                                        </div>
                                                          <div class="invalid-feedback">
                                                       Please select location type
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            <!--    <div class="col-md-6">-->
                                            <!--    <div class="mb-3">-->
                                            <!--    <div class="mb-3">-->
                                            
                                            <!--<label class="form-label" for="validationCustom02">Availability</label>-->
                                            <!--           <select class="form-control" id="sel1"  name="availability">-->
                                            <!--               <option value="1">Available</option>-->
                                            <!--               <option value="0">Not Available</option>-->
                                                        
                                            <!--           </select>-->
                                            <!--       </div>-->

                                            <!--        </div>-->
                                            <!--</div>-->

                                            <!-- <div class="col-md-12">
                                                   
                                                
                                                </div> -->


                                                <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom03">Address</label>
                                                        <input type="text" class="form-control" id="validationCustom03" placeholder="address"  name="address"  maxlength="300" >
                                                       
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                     <label class="form-label" for="validationCustom02">Discount Code
                                                  </label>
                                                    <input type="text" class="form-control" id="disc_code" name="discount_code"  placeholder="Discount Code"   maxlength="30">
                                                    <div class="valid-feedback">
                                                     Looks good!
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                              </div>

                                            <div class="col-md-12">
                                                    <div class="mb-3">
                                             <label class="form-label" for="validationCustom02">Offer URL</label>
                                             <input type="url" class="form-control" id="offer_url"  pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?" placeholder="Offer URL"  name="offer_url" >
                                                        <div id="validUrl" class="valid-feedback">
                                                           
                                                        </div>
                                                        <div id="invalidUrl" class="invalid-feedback">
                                                           
                                                        </div>
                                                    </div>
                                                    
                                                             <div class="mb-3">
                                             <label class="form-label" for="validationCustom02">Email</label>
                                             <input type="email" class="form-control"  id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  placeholder="Email" maxlength="200"  name="email" >
                                                   <span id="emailResult"></span>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    
                                                </div>


                                                <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom03">Location link</label>
                                                        <input type="url" class="form-control" id="validationCustom03" placeholder="Location link" pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?" name="location_link" >
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom04">Facebook Name
                                                </label>
                                                <input type="text" class="form-control" id="validationCustom04" name="fb_name" maxlength="50"  placeholder="Facebook Name"  >
                                                                                                    
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-4">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="mb-3">
                                                                                                        <label class="form-label" for="validationCustom02">Facebook Link
                                                </label>
                                                                                                        <input type="text" class="form-control"  pattern="http://www\.facebook\.com\/(.+)|https://www\.facebook\.com\/(.+)" id="fb_link"  name="fb_link"  placeholder="Facebook Link"  >
                                                                                                        <div class="valid-feedback">
                                                                                                            Looks good!
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                </div>
                                                                                            </div>


                                                                                            <div class="row">
                                                                                                <div class="col-md-6">
                                                                                                    <div class="mb-3">
                                                                                                        <label class="form-label" for="validationCustom01">Small Image
                                                </label>
                                                                                                        <input type="file" class="form-control" id="validationCustom01"  name="small_image" >
                                                                                                        
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-6">
                                                                                                <div class="mb-3">
                                                                                                        <label class="form-label" for="validationCustom03">Large Image
                                                </label>
                                                                                                        <input type="file" class="form-control" id="validationCustom03" name="large_image" 
                                                "  >
                                                                                                        
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            
                                                                                            

                                                                                            <div class="row">
                                                                                                <div class="col-md-6">
                                                                                                    <div class="mb-3">
                                                                                                        <label class="form-label" for="validationCustom01">Instagram Name
                                                </label>
                                                                                                        <input type="text" class="form-control" id="validationCustom01"  placeholder="Instagram Name" name="insta_name" maxlength="50" >
                                                                                                        
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-6">
                                                                                                <div class="mb-3">
                                                                                                        <label class="form-label" for="validationCustom03">Instagram Link
                                                </label>
                              <input type="url" class="form-control"  pattern="http://www\.instagram\.com\/(.+)|https://www\.instagram\.com\/(.+)" id="insta_link"  name="insta_link"  placeholder="Instagram Link"  >
                                                                                                        
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
                                <button type="button" class="btn btn-secondary waves-effect" onclick="resetForm1()" data-bs-dismiss="modal">Close</button>
 
                                 <button type="submit" id="submit" class="btn btn-success waves-effect waves-light">Save</button> 
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
                                        <h4 class="card-title">Discount List</h4>
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
                                                <th>Title</th>
                                                <!--<th>Description</th>-->
                                                <!--<th>Availability</th>-->
                                                <!--<th>Address</th>-->

                                                <!--<th>Location Link</th>-->
                                                <!--<th>Phone</th>-->
                                                <!--<th>Email</th>-->
                                                <!--<th>FB Name</th>-->
                                                <!--<th>FB Link</th> -->

                                                <!-- <th>Instat Name</th>-->
                                                <!--<th>Insta Link</th>-->
                                              
                                               
                                               
                                                <th>Expire Date</th>
                                                <th>Type</th>
                                                <th>Merchant</th>
                                                <!--<th>Code</th>-->

                                                <!--<th>Url</th>                                              -->
                                                <th>Status</th>
                                                <th>Action</th>
                                             
                                            </tr>
                                            </thead>
        
        
                                            <tbody>



                                                <?php
                                    $ii = 1;
                                    foreach ($discount_list->result() as $row):
                                    
                                    
                                                                                        
                                    ?>


                  <tr>                     




                                                <td><?php echo $row->disc_id; ?></td>
                                                <td><?php echo $row->disc_title; ?></td>
                                                <!--<td><?php echo $row->disc_info; ?></td>-->
                                                <!--<td><?php echo $row->disc_availability; ?></td>-->
                                                <!--<td><?php echo $row->disc_address; ?></td>-->
                                              
                                              
                                                <!--<td><?php echo $row->disc_phone; ?></td>-->
                                                <!--<td><?php echo $row->disc_email; ?></td>-->
                                                <!--<td><?php echo $row->disc_fb_name; ?></td>-->
                                                <!--<td><?php echo $row->disc_fb_link; ?></td>-->
                                                <!--<td><?php echo $row->disc_insta_name; ?></td>-->

                                                <!--<td><?php echo $row->disc_insta_link; ?></td>-->
                                                <td><?php echo $row->disc_expiry; ?></td>
                                                <td><?php echo $row->disc_type; ?></td>
                                                 <td><?php echo $row->mer_name; ?></td>
                                                <!--<td><?php echo $row->disc_code; ?></td>-->
                                                <!--<td><?php echo $row->disc_url; ?></td>-->
                                                <!--<td><img src="<?php echo $row->small_image; ?>" width="100px"></td>-->
                                                <td><?php echo $row->disc_status == "1" ? "Active" : "Inactive"; ?></td>
                            
                                                <!--<td><?php echo $row->disc_status; ?></td>-->
                                      
                                                
                                                
                                                <td>
                                                  
                                              <!--<i class="bx bx-edit-alt"></i> -->

                                              <i class="bx bx-edit-alt" data-bs-toggle="modal"  data-bs-target="#myModal<?php echo $row->disc_id ?>"></i> 
                                           
                                              <div class="modal fade" id="myModal<?php echo $row->disc_id?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                         
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Update Discount Information</h5>
                                                            <button type="button" onclick="resetForm1()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <div class="card">
                                                 
                                                            <div class="card-body">
                                                            <form class="needs-validation"  enctype="multipart/form-data" id="update_form"  method="post"  action="<?php echo base_url() ?>ManageDiscount/Update" novalidate>


                                                               <div class="col-md-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="validationCustom02">Merchant</label>
                                                                            <select class="form-control" id="sel1"  name="merchant_id">
                      
                                                                        <?php echo  '<option value='.$row->mer_id.'>'.$row->mer_name.'</option>'?>
                                                                                 
                                                                                <?php
                                                                                foreach ($merchant_list->result() as $rownew):
                                                                                ?>

                                                                               <?php 
                                                           
                                                                           echo    $rownew->mer_id ==  $row->mer_id ?'<option style="display:none"></option>':
                                                                           '<option value='.$rownew->mer_id.'>'.$rownew->mer_name.'</option>';?>   
                                                                                                        <?php
                                                                              endforeach; ?>
                                                                            
                                                                            </select>
                                                                            <div class="valid-feedback">
                                                                                Looks good!
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                              <input type="hidden"  name="id"   value="<?php echo $row->disc_id; ?>">
     

                                                                <div class="row">
                                                                    <div class="col-md-6">

                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="validationCustom02">Offer Title</label>
                                                                            <input type="text" class="form-control" id="validationCustom04" name="offer_title" placeholder="Offer Title"   value="<?php echo $row->disc_title;?>" maxlength="150" required>
                                                                            <div class="valid-feedback">
                                                                            Please enter the valid offer title
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="validationCustom02">Discount Type</label>
                                                                             <select class="form-control" id="sel1"  name="discount_type" onchange="validateUpdateDiscType(this.value)">
                                                                            <option value="<?php echo $row->disc_type; ?>"><?php echo $row->disc_type; ?></option>
                                                                        <?php 
                                                                    
                                                                               echo    $row->disc_type == 'Barcode'?'<option style="display:none"></option>':' <option value="Barcode">Barcode</option>';?> 
                                                                            
                                                                               <?php   echo    $row->disc_type == 'QR Code'?'<option style="display:none"></option>':' <option value="QR Code">QR Code</option>';?>   
                                                                               <?php    echo    $row->disc_type == 'Online'?'<option style="display:none"></option>':' <option value="Online">Online</option>';?>   

                                                                            </select>

                                                                        </div>
                                                                </div>

                                                                    <div class="row">
                                                                    <div class="col-md-6">

                                                                    <div class="mb-3">
                                                                    <label class="form-label" for="validationCustom02">Contact Details</label>
                                                                    <input type="text" class="form-control" id="validationCustom04" name="contact" placeholder="Contact Details" onkeypress="return onlyNumberKey(event)"  value="<?php echo $row->disc_phone; ?>" >
                                                                            <div class="valid-feedback">
                                                                            Please enter the valid contact number
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                            <label class="form-label" for="validationCustom02">Expire Date</label>
                                                                            <input type="date" class="form-control" id="expireDateValidate<?php echo $row->disc_id ?>" name="valid_date" onkeydown="return false" onchange="valideteDate(this.value)"  placeholder="Valid Period" value="<?php echo $row->disc_expiry; ?>"
                                                                            min="<?php echo date("Y-m-d"); ?>" >
                                                                            
                                                                                <?php
                                                                            
                                                                            if($row->disc_expiry< date('Y-m-d')){
                                                                                
                                                                                echo '<p id="validate_date" style="color:red">Please enter the valid period';
                                                                            }
                                                                        
                                                                        ?>
                                                                          
                                                                            <div class="valid-feedback">
                                                                        
                                                                    
                                                                            </div>

                                                                        </div>
                                                                </div>

                                                        <div class="row">

                                                                    <div class="mb-12">
                                                                            <label class="form-label" for="validationCustom01">Offer Description</label>
                                                                            <textarea  class="form-control"   placeholder="Offer Discription" name="description" maxlength="300" ><?php echo $row->disc_info; ?></textarea>
                                                                            <div class="invalid-feedback">
                                                                            Please enter the offer description.
                                                                            </div>
 
                                                                        </div>
                                                      </div>
                                                      <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Locations </label>
                                               
                                                      <select class="form-control" id="sel1" name="disc_location">
                                                      <?php echo  '<option value='.$row->location_id.'>'.$row->location_name.'</option>'?>
                                                      <option disabled>----Locations----</option>
                                                            <?php
                                                 
                                                            $i = 1;
                                                            foreach ($location_list->result() as $row3):
                                                        ?>
                                                         <option value="<?php echo $row3->location_id; ?>"><?php echo $row3->location_name; ?></option>
                                     
                                                       <?php
                                                    endforeach; ?>         
                                                        
                                                     </select>
                                                     
                                                     <div class="valid-feedback">
                                                         Looks good! 
                                                        </div>
                                                          <div class="invalid-feedback">
                                                       Please select location type
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                     <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Discount Categories</label>
                                                        <!--<select class="form-control" id="sel1"  name="customer_type">-->
                                                        <!--    <option value="1">Premium</option>-->
                                                        <!--    <option value="0">Non-Premium</option>-->
                                                         
                                                        <!--</select>-->
                                                        
                                                        
                                                      <select class="form-control" id="sel1" name="main_category_type">
                                                         <option value="<?php echo $row->disc_category_id; ?>"><?php echo $row->category_name; ?></option>
                                                      <option disabled>----Discount Categories----</option>
                                                        <?php
                                                            $i = 1;
                                                            foreach ($discount_type_list->result() as $row4):
                                                        ?>
                                                         <option value="<?php echo $row4->disc_category_id; ?>"><?php echo $row4->category_name; ?></option>
                                                       <?php
                                                       endforeach; ?>         
                                                        
                                                     </select>
                                                     
                                                     <div class="valid-feedback">
                                                         Looks good! 
                                                        </div>
                                                          <div class="invalid-feedback">
                                                       Please select location type
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                
                                                
                                                                <div class="row">
                                                                    <div class="col-md-6">

                                                                        <div class="mb-6">
                                                        <label class="form-label" for="validationCustom02">Customer Type</label>
                                                                            
                                                               <select class="form-control" id="sel1" name="customer_type[]" multiple >
                                                     
                                                     

                                                     
                                                      <?php
                                                           $selectedItem=array();
                                                      
                                                            $CodeWallTutorialArray = json_decode($row->cus_type);//array($row->cus_type);
                                                            
                                                            $arrayLength = count($CodeWallTutorialArray);

                                                            
                                                          foreach ($customer_type->result() as $row2):
                                                           ?>
                                                           
                                                           
                                                           <?php
                                                            $i = -1;
                                                            while ($i < $arrayLength)
                                                            {  
                                                                $i++;
                                                                
                                                            ?>
                                                             
                                                  <?php
                                                  
                                                               if($CodeWallTutorialArray[$i]  == $row2->customer_level_id){
                                                               
                                                              
                                                                 array_push($selectedItem,$row2->customer_level_id);
                                                                
                                                               }
                                                  
                                                  ?>
                                                             
                                                                
                                                            <?php echo $CodeWallTutorialArray[$i]  != $row2->customer_level_id?'<option style="display:none"></option>':
                                                           '<option value='.$row2->customer_level_id.' selected>'.$row2->level_name.'</option>';?>   ?>      
                                                            <?php  }  ?>
                                               
                                               
                                                       <?php
                                                       endforeach; ?>         
                                                        
                                                        
                                                        
                                                        
                                                           <?php

                                                          foreach ($customer_type->result() as $row2):
                                                      
                                                           ?>
                                                           
                                                           
                                          
                                                            <?php
                                                            
                                                                if (!in_array( $row2->customer_level_id, $selectedItem))
                                                                  { 
                                                                  
                                                                  echo '<option value='.$row2->customer_level_id.' >'.$row2->level_name.'</option>';
                                                                  
                                                                  }  
                                                             ?>     
                                                                 
                                                 
                                                            
                                                       <?php
                                                       endforeach; ?>   
                                                        
                                                        
                                                     </select>
                                                  <div class="valid-feedback">
                                                                            Please select customer type
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                              


                                                                    <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="validationCustom03">Address</label>
                                                                            <input type="text" class="form-control" id="validationCustom03" placeholder="address"  value="<?php echo $row->disc_address; ?>" maxlength="300" name="address" >
                                                                        
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                    <div class="col-md-12">
                                                                        <div class="mb-3">
                                                                        <label class="form-label" for="validationCustom02">Discount Code
                                                                    </label>
                                                                        <input type="text" class="form-control" id="disc_update_code" name="discount_code" value="<?php echo $row->disc_code; ?>"  placeholder="Discount Code"  >
                                                                        <div class="valid-feedback">
                                                                        Looks good!
                                                                        </div>
                                                                        </div>
                                                                        </div>
                                                                        </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                        <div class="mb-3">
                                                                <label class="form-label" for="validationCustom02">Offer URL</label>
                                                                <input type="text" class="form-control" id="offer_update_url_id"  pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"  placeholder="Barcode / Offer URL" value="<?php echo $row->disc_url; ?>"  name="offer_url" >
                                                                                                                <div class="valid-feedback">
                                                            Looks good!
                                                                 </div>      
                                                             <div class="invalid-feedback">
                                                           Invalid offer url
                                                                 </div>   
                                                                        </div>
                                                                    </div>
                                                            <div class="mb-3">
                                                              <label class="form-label" for="validationCustom02">Email</label>
                                                              <input type="email" class="form-control"  id="updateEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"   value="<?php echo $row->disc_email; ?>" placeholder="Email"  maxlength="200"  name="newemail">
                                                               <span id="updateemailResult"></span>
                                                                <div class="valid-feedback">
                                                            Looks good!
                                                                 </div>
                                                           </div>

                                                                    <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="validationCustom03">Location link</label>
                                                                            <input type="url" class="form-control" id="validationCustom03" placeholder="Location link" value="<?php echo $row->disc_geo; ?>"  name="location" pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
 >                                      <div class="valid-feedback">
                                                            Looks good!
                                                                 </div>      
                                     <div class="invalid-feedback">
                                                           Invalid location Link
                                                                 </div>   
                                                                        
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="validationCustom04">Facebook Name
                                                                    </label>
                                                                    <input type="text" class="form-control" id="validationCustom04" name="fb_name" value="<?php echo $row->disc_fb_name; ?>" placeholder="Facebook Name"   >
                                                                                                                        
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="col-md-4">
                                                                                                                    <div class="col-md-12">
                                                                                                                 <div class="mb-3">
                                                                                                                 <label class="form-label" for="validationCustom02">Facebook Link
                                                                    </label>
                                                                                                                   <input type="text" class="form-control"  id="fb_link_update" name="fb_link" value="<?php echo $row->disc_fb_link; ?>" placeholder="Facebook Link" pattern="http://www\.facebook\.com\/(.+)|https://www\.facebook\.com\/(.+)" >
                                                                                                                                                     <div class="valid-feedback">
                                                            Looks good!
                                                                 </div>      
                                     <div class="invalid-feedback">
                                                           Invalid facebook Link
                                                                 </div>   
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                <div class="col-md-6">
                                                                                                    <div class="mb-3">
                                                                                                        <img src="<?php echo $row->small_image; ?>" width="100px">
                                                                                                        <label class="form-label" for="validationCustom01">Small Image
                                                                                                         </label>
                                                                                                        <input type="file" class="form-control"   name="small_image" >
                                                                                                        
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-6">
                                                                                                    <img src="<?php echo $row->large_image; ?>" width="100px">
                                                                                                      <label class="form-label" for="validationCustom03">Large Image</label>
                                                                                                        <input type="file" class="form-control" name="large_image"  >
                                                                                                </div>
                                                                                            </div>
                                                                                            
                                                                                            


                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-6">
                                                                                                                        <div class="mb-3">
                                                                                                                            <label class="form-label" for="validationCustom01">Instagram Name
                                                                    </label>
                                                                                                                            <input type="text" class="form-control" id="validationCustom01"  placeholder="Instagram Name"  value="<?php echo $row->disc_insta_name; ?>" name="insta_name"  maxlength="50">
                                                                                                                            
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="col-md-6">
                                                                                                                    <div class="mb-3">
                                                                    <label class="form-label" for="validationCustom03">Instagram Link
                                                                    </label>
         <input type="url" class="form-control"  id="insta_link_update" name="insta_link" 
            placeholder="Instagram Link" value="<?php echo $row->disc_insta_link; ?>"  pattern="http://www\.instagram\.com\/(.+)|https://www\.instagram\.com\/(.+)" >
                                      <div class="valid-feedback">
                                                            Looks good!
                                                                 </div>      
                                     <div class="invalid-feedback">
                                                           Invalid instagram Link
                                                                 </div>   
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>


                                                                        <div class="col-md-12">
                                                                                    <div class="mb-3">
                                                                                        <label class="form-label" for="validationCustom02">Status</label>
                                                                                        <select class="form-control" id="sel1"  name="status">
                                                                                     <?php echo $row->disc_status == 1 ? ' <option value="1">Active</option>' : ' <option value="0">Inactive</option>'; ?>
                                                                                     
                                                                                       <?php    echo   $row->disc_status == 1 ?'<option style="display:none"></option>':'<option value="1">Active</option>';?>   
                                                                                        <?php    echo   $row->disc_status == 0 ?'<option style="display:none"></option>':'<option value="0">Inactive</option>';?>   
                                            
                                                                                        
                                                                                        </select>
                                                                                        <div class="valid-feedback">
                                                                                            Looks good!
                                                                                        </div>
                                                                                    </div>
                                                                            </div>

                                                         <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary waves-effect" onclick="resetForm1()" data-bs-dismiss="modal">Close</button>
                                                            <button  id="update_submit" type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                                                        </div>
                                                         
                                                            </form>
                                                            </div>
                                                        </div>
                                                        </div>
                                                       
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->         
                                         
                                            </td>

                                                    <?php
endforeach; ?>
                                           
                                               
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
        
        <script>
                   function   clearSearch(){
          document.getElementById("search").reset();  
          
          window.location.href = '<?php echo base_url()?>/ManageDiscount'; 
          
        }
       function   resetForm1(){
     
         document.getElementById("adminform").reset();
         location.reload(); 

        }
        function valideteDate(date){
        
        document.getElementById("validate_date").style.display = 'none';
             
        
        }
        
        function ValidURL1(str) {
            
          const $invalidUrl = $("#invalidUrl"); 
          const $validUrl = $("#validUrl"); 
            
          var regex = /(http|https):\/\/(\w+:{0,1}\w*)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%!\-\/]))?/;
          if(!regex .test(str)) {
          

            
             $invalidUrl.text("Invalid Url");
            return false;
          } else {
            $validUrl.text("Valid Url");
            return true;
            valid
          }
        }
        


        
         function validateUpdateDiscType(value){
           
            if(value =="Barcode"){
                
                
                
                document.getElementById("disc_update_code").required = true;
            }
            
             if(value =="Online"){
                
          
                document.getElementById("offer_update_url_id").required = true;
            }
            
        }
        
        function validateDiscType(value){
           
            if(value =="Barcode"){
                
                
                
                document.getElementById("disc_code").required = true;
            }
            
             if(value =="Online"){
                
                
                
                document.getElementById("offer_url_id").required = true;
            }
            
        }
                         function onlyNumberKey(evt) {
          
                            // Only ASCII character in that range allowed
                            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
                            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                                return false;
                            return true;
                        }
    
        
        </script>
        
                <?php include_once ('footer.php'); ?>
