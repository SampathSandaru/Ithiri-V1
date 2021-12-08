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


                    }        if($message=="duplicate"){


                        echo '<div class="alert alert-danger" role="alert">
                     Duplicate information please try again later
                        </div>';


                    }
                    
                    ?>

                    
         
                    <div class="row">
                            <div class="col-xl-12">
                                
                                
                                                                                
                                   <div class="card" style="padding:20px">

                                                    <form id="search"  action="<?php echo base_url();?>Merchant/SearchMerchant">


                                                               <center> <div class="row">

                                                     <div class="form-group col-md-8">
                                                                    
                                                                            <input type="text" class="form-control"  placeholder="Merchant Name" id="specificfield"  name="name" required>
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

                                    <h4 class="card-title">Merchant Registration</h4>

                                    <a  type="button" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-success waves-effect waves-light">
                                    Add New Merchant</a>

                                        <!-- <h4 class="card-title">Add New Merchants</h4> -->
                                        <!-- <p class="card-title-desc">Provide valuable, actionable feedback to your users with HTML5 form validation–available in all our supported browsers.</p> -->
                                    </div>



                                          <!-- <i class="bx bx-remove-alt" data-bs-toggle="modal" data-bs-target="#myModal">EDIT</i>  -->

           
                                                                                   
                                   <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Merchant Registration</h5>
                                                            <button type="button" class="btn-close" onclick="resetForm1()" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                       
                                      <div class="card-body">
                                        <form class="needs-validation" method="post" name="reg_form" id="adminform" action="<?php echo base_url()?>Merchant/AddNewMerchant" novalidate>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Name</label>
                                                        <input type="text" class="form-control" id="nameField"  maxlength="150" onkeyup="MerchentNameValidation(this.value)" placeholder="Merchant Name" name="name" required>
                                                        <div class="invalid-feedback">
                                                        Please enter the merchant name.
                                                        </div>
                                                        <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="mb-3">
                                                        <label class="form-label" for="validationCustom03">Business Registration</label>
                                                        <input type="text" class="form-control"maxlength="30" onkeyup="MerchentBizRegValidation(this.value)"
                                                         id="bizReg" placeholder="Registration number" name="biz_registration" required>
                                                        <div class="invalid-feedback">
                                                        Please enter the registration number.

                                                        </div>
                                                        <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom03">Address</label>
                                                    
                                    <textarea  class="form-control" id="validationCustom03" maxlength="300" placeholder="Merchant address" name="address" required></textarea>
                                                        
                                                        <div class="invalid-feedback">
                                                        Please enter the address.
                                                        </div>
                                                        <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom04">Phone</label>
                                                        <input type="phone" maxlength="13" class="form-control" onkeypress="return onlyNumberKey(event)"  id="validationCustom04" placeholder="Phone number"  name="phone" required>
                                                        <div class="invalid-feedback">
                                                        Please enter the phone number.
                                                        </div>
                                                        <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Email</label>
                                                        <input type="email" class="form-control" id="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Email"  name="email">
                                                        <span id="emailResult"></span>
                                                        <div class="invalid-feedback">
                                                        Please enter the email.
                                                        </div>
                                                        <!--<div class="valid-feedback">-->
                                                        <!--        Looks good!-->
                                                        <!--    </div>-->
                                                    </div>
                                                </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom03">Location link</label>
                                                        <input type="url" class="form-control" id="validationCustom03" placeholder="Location link"  pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?" name="location" >
                                                        <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom04">Facebook Name
</label>
                                                        <input type="text" class="form-control" id="validationCustom04" name="fb_name" maxlength="50" placeholder="Facebook Name
"  name="fb_name" >
                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Facebook Link
</label>
                                                        <input type="url" class="form-control" pattern="http://www\.facebook\.com\/(.+)|https://www\.facebook\.com\/(.+)" id="fb_link_update" name="fb_link" placeholder="Facebook Link
"  name="fb_link" >
<div class="invalid-feedback">
                                                             Invalid facebook link
                                                            </div>
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
                                                        <label class="form-label" for="validationCustom01">Instagram Name
</label>
                                                        <input type="text" class="form-control" id="validationCustom01" maxlength="50"  placeholder="Instagram Name" name="insta_name" >
                                                        <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="mb-3">
                                                        <label class="form-label" for="validationCustom03">Instagram Link
</label>
                                                        <input type="url" class="form-control"  pattern="http://www\.instagram\.com\/(.+)|https://www\.instagram\.com\/(.+)" id="insta_link_update" name="insta_link" placeholder="Instagram Link
" name="insta_link" ><div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        <div class="invalid-feedback">
                                                             Invaid instagram link
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
                                            
                                            <button class="btn btn-success"onclick="submitForm()"  id="submit" type="submit">Save</button>
                                        </form>
                                    </div>


                                                        </div>
                                                        <div class="modal-footer">
                                                             <button type="button" class="btn btn-secondary waves-effect" onclick="resetForm1()" data-bs-dismiss="modal">Close</button>
                                                        
                                                            <!-- <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button> -->
                                                        </div>
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
                                        <h4 class="card-title">Merchant List</h4>
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
                                                <th>Biz No</th>
                                                <!-- <th>Location</th> -->
                                                <th>Phone</th>

                                                <th>Email</th>
                                                <!-- <th>FB Name</th>
                                                <th>FB Link</th>
                                                <th>Insta Link</th>
                                                <th>Instat Name</th> -->

                                                <!--<th>Location Link</th>-->
                                                <!--<th>Created Date</th>-->
                                                <!--<th>Active Date</th>-->
                                                <!--<th>Inactive Date</th>                                              -->
                                                <th>Status</th>

                                                <th>Users</th>
                                                <th>Offers</th>
                                                <th>Action</th>
                                             
                                            </tr>
                                            </thead>
        
        
                                            <tbody>



                        <?php

                            $i=1;
                            foreach($merchant_list->result() as $row) :
                            ?>


                  <tr>                     
                      
                  





                                                <td><?php echo  $row->mer_id;?></td>
                                                <td><?php echo $row->mer_name;?></td>
                                                <td><?php echo $row->mer_reg;?></td>
                                                <!-- <td><?php echo $row->mer_address;?></td> -->
                                                <td><?php echo $row->mer_phone;?></td>
                                                <td><?php echo $row->mer_email;?></td>
                                                <!-- <td><?php echo $row->mer_fb_name;?></td>
                                                <td><?php echo $row->mer_fb_link;?></td>
                                                <td><?php echo $row->mer_insta_name;?></td>
                                                <td><?php echo $row->mer_insta_link;?></td> -->
                                                <!--<td><?php echo $row->mer_geo;?></td>-->
                                                <td>  <?php echo $row->mer_status == 1 ? 'Active':'Inactive';?></td>
                                                <!--<td><?php echo $row->mer_status;?></td>-->
                                                <!--<td><?php echo $row->mer_created_date;?></td>-->
                                                <!--<td><?php echo $row->mer_active_date;?></td>-->
                                                <!--<td><?php echo $row->mer_inactive_date;?></td>-->
                                                
                                                  <td><a style="margin:10px" href="<?php echo base_url()?>Merchant/getMerchantAppUser/<?php echo $row->mer_id?>" type="button" class="btn btn-success waves-effect waves-light">
                                               View app users</a></td>
                                                <td><a style="margin:10px" href="<?php echo base_url()?>Merchant/getMerchantDiscount/<?php echo $row->mer_id?>" type="button" class="btn btn-success waves-effect waves-light">
                                                View Offers</a></td>
                                   
                                                
                                                
                                                <td>
                                                  
                                             
                                                <i class="bx bx-remove-alt" data-bs-toggle="modal" data-bs-target="#myModal<?php echo  $row->mer_id?>">    <i class="bx bx-edit-alt"></i> </i> 

                        
                            <div class="modal fade" id="myModal<?php echo  $row->mer_id?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Update Merchant Information</h5>
                                                            <button type="button" class="btn-close" onclick="resetForm1()" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                             <form class="needs-validation" method="post"  action="<?php echo base_url()?>Merchant/UpdateMerchant" novalidate>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Name</label>
                                                        <input type="text" class="form-control" id="new_name<?php echo $row->mer_id;?>"  placeholder="Merchant Name" onkeyup="UpdateMerchentNameValidation(this.value,<?php echo $row->mer_id;?>)" maxlength="150" value="<?php echo $row->mer_name;?>"  name="name" required>
                                                        <div class="invalid-feedback">
                                                        Please enter the merchant name.
                                                        </div>

                                                        
                                                    </div>
                                                </div>
                                                  <input type="hidden" value="<?php echo $row->mer_reg;?>" id="old_biz_reg<?php echo $row->mer_id;?>" name="old_mer_reg" >
                                                  
                                                  <input type="hidden" value="<?php echo $row->mer_name;?>" id="old_name<?php echo $row->mer_id;?>" name="old_mer_name">

                                                 <input type="hidden" value="<?php echo $row->mer_id;?>" name="id" >

                                                <div class="col-md-6">
                                                <div class="mb-3">
                                                        <label class="form-label" for="validationCustom03">Business Registration</label>
                                                        <input type="text" class="form-control" id="update_biz_reg<?php echo $row->mer_id;?>" placeholder="Registration number"  onkeyup="UpdateMerchentBizRegValidation(this.value,<?php echo $row->mer_id;?>)" maxlength="30" value="<?php echo $row->mer_reg;?>" name="biz_registration" required>
                                                        <div class="invalid-feedback">
                                                        Please enter the registration number.

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom03">Address</label>
                                                        <input type="text" class="form-control" id="validationCustom03" placeholder="Merchant address" maxlength="300" value="<?php echo $row->mer_address;?>" name="address" required>
                                                        <div class="invalid-feedback">
                                                        Please enter the address.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom04">Phone</label>
                                                        <input type="text" class="form-control" id="validationCustom04" placeholder="Phone number" onkeypress="return onlyNumberKey(event)" value="<?php echo $row->mer_phone;?>"  maxlength="13" name="phone" required>
                                                        <div class="invalid-feedback">
                                                        Please enter the phone number.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Email</label>
                                                        <input type="email" class="form-control" id="validationCustom04" placeholder="Email"  maxlength="50" value="<?php echo $row->mer_email;?>"  name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                                       <div class="invalid-feedback">
                                                             Invalid email address
                                                            </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom03">Location link</label>
                                                        <input type="url" class="form-control" id="validationCustom03" placeholder="Location link" value="<?php echo $row->mer_geo;?>"  pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?" name="location" >
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom04">Facebook Name
</label>
                                                        <input type="text" class="form-control" maxlength="50" id="validationCustom04" name="fb_name" value="<?php echo $row->mer_fb_name;?>" placeholder="Facebook Name
"  name="fb_name" >
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Facebook Link
</label>
                                                        <input type="url" class="form-control" pattern="http://www\.facebook\.com\/(.+)|https://www\.facebook\.com\/(.+)" id="fb_link" name="fb_link" value="<?php echo $row->mer_fb_link;?>" placeholder="Facebook Link
"  name="fb_link" >
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
                                                        <label class="form-label" for="validationCustom01">Instagram Name
</label>
                                                        <input type="text" class="form-control" id="validationCustom01" maxlength="50"  placeholder="Instagram Name" value="<?php echo $row->mer_insta_name;?>" name="insta_name" >
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="mb-3">
                                                        <label class="form-label" for="validationCustom03">Instagram Link
</label>
                                                        <input type="url" class="form-control" pattern="http://www\.instagram\.com\/(.+)|https://www\.instagram\.com\/(.+)" id="insta_link" name="insta_link" value="<?php echo $row->mer_insta_link;?>" placeholder="Instagram Link
" name="insta_link" >
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Status</label>
                                                
                                                        
                                                         <select class="form-control" id="sel1"  name="status">
                                                                                     <?php echo $row->mer_status == 1 ? ' <option value="1">Active</option>' : ' <option value="0">Inactive</option>'; ?>
                                                                                     
                                                                                    <?php    echo   $row->mer_status == 1 ?'<option style="display:none"></option>':'<option value="1">Active</option>';?>   
                                                                                   
                                                                                    <?php    echo   $row->mer_status == 0 ?'<option style="display:none"></option>':'<option value="0">Inactive</option>';?>   
                                            
                                                    
                                                         </select>
                                                         
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            <button class="btn btn-success" id="update_submit<?php echo $row->mer_id;?>" type="submit">Save</button>
                                        </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" onclick="resetForm1()" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                                            <!--<button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>-->
                                                        </div>
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
        
        <script>
           function   clearSearch(){
          document.getElementById("search").reset();  
          
          window.location.href = '<?php echo base_url()?>/Merchant'; 
          
        }
        
   function   resetForm1(){
       
       document.getElementById('adminform').reset();
       document.getElementById("bizReg").style.border  = "1px  solid grey"; 
       document.getElementById("nameField").style.border  = "1px  solid grey"; 
       location.reload(); 
       
    
        }
           function   UpdateMerchentBizRegValidation(value,id){
            
                 
            var update_biz_reg = document.getElementById('update_biz_reg'+id).value;
            var old_biz_reg= document.getElementById('old_biz_reg'+id).value;
            
            
         
            if(old_biz_reg != value){
            
                 $.ajax({
                        url: "<?php echo base_url();?>Merchant/MerchantBizRegValidation",
                        type: "post",
                        data: {value:value} ,
                        success: function (response) {
                        
                       if(response == 0){
                    
                    
                           
                         var new_name_color =   document.getElementById("new_name"+id).style.borderColor;
                         
                         if(new_name_color != "red"){
                    
                            document.getElementById("update_submit"+id).disabled = false; 
                         
                         }
                         
                        document.getElementById('update_biz_reg'+id).style.border = "1px solid green"; 
                        
                       
                        
                    }else{
             
                         document.getElementById("update_submit"+id).disabled = true; 
                          
                         document.getElementById("update_biz_reg"+id).style.border = "1px solid red"; 
                         
                         alert("Biz Reg No Already Exist");
                        
                    }
                  
                   
                },
                error: function(jqXHR, textStatus, errorThrown) {
                   console.log(textStatus, errorThrown);
                }
                });
              }
            
        }
        
        
     function   UpdateMerchentNameValidation(value,id){
            
                 
            var new_name= document.getElementById('new_name'+id).value;
            var old_name= document.getElementById('old_name'+id).value;
            
            
         
            if(old_name != value){
            
                 $.ajax({
                        url: "<?php echo base_url();?>Merchant/MerchantNameValidation",
                        type: "post",
                        data: {value:value} ,
                        success: function (response) {
                        
                       if(response == 0){
                    
                    
                           
                         var biz_reg_color =   document.getElementById("update_biz_reg"+id).style.borderColor;
                         
                         if(biz_reg_color != "red"){
                    
                            document.getElementById("update_submit"+id).disabled = false; 
                         
                         }
                         
                        document.getElementById('new_name'+id).style.border = "1px solid green"; 
                        
                       
                        
                    }else{
             
                         document.getElementById("update_submit"+id).disabled = true; 
                          
                         document.getElementById("new_name"+id).style.border = "1px solid red"; 
                         
                         alert("Merchant Name Already Exist");
                        
                    }
                  
                   
                },
                error: function(jqXHR, textStatus, errorThrown) {
                   console.log(textStatus, errorThrown);
                }
                });
              }
            
        }
        
        function submitForm() {
   // Get the first form with the name
   // Usually the form name is not repeated
   // but duplicate names are possible in HTML
   // Therefore to work around the issue, enforce the correct index
   var frm = document.getElementsByName('adminform')[0];
   frm.submit(); // Submit the form
   frm.reset();  // Reset all form data
   return false; // Prevent page refresh
}
        
        
       function linkValidation(str) {
          
          var pattern = new RegExp('^((https?:)?\\/\\/)?'+ // protocol
        '(?:\\S+(?::\\S*)?@)?' + // authentication
        '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
        '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
        '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
        '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
        '(\\#[-a-z\\d_]*)?$','i'); // fragment locater
    if (!pattern.test(str)) {
        return false;
    } else {
        return true;
    }
    }
    
    
          function  MerchentNameValidation(value){
              
               $.ajax({
                url: "<?php echo base_url();?>Merchant/MerchantNameValidation",
                type: "post",
                data: {value:value} ,
                success: function (response) {
        
                    var bizReg_color =   document.getElementById("bizReg").style.borderColor;
                  
                    
                         
                         
                    if(response == 0){
                        
                         if(bizReg_color != "red"){
                            document.getElementById("submit").disabled = false; 
                         }
                        document.getElementById("nameField").style.border = "1px solid green"; 
                        
                    }else{
                        
                           document.getElementById("submit").disabled = true; 
                         document.getElementById("nameField").style.border = "1px solid red"; 
                         alert("Merchant Name Already Exist");
                        
                    }
                  
                   
                },
                error: function(jqXHR, textStatus, errorThrown) {
                   console.log(textStatus, errorThrown);
                }
                });
                    
                
            }
            
            
            function MerchentBizRegValidation(value){
                
                
                
                  var nameField_color =   document.getElementById("nameField").style.borderColor;
                  
                  
                       $.ajax({
                        url: "<?php echo base_url();?>Merchant/MerchantBizRegValidation",
                        type: "post",
                        data: {value:value} ,
                        success: function (response) {
                            
                    
        
                    if(response == 0){
                        
                        if(nameField_color != "red"){
                            document.getElementById("submit").disabled = false; 
                         }
                        document.getElementById("bizReg").style.border = "1px solid green"; 
                        
                    }else{
                        
                           document.getElementById("submit").disabled = true; 
                         document.getElementById("bizReg").style.border = "1px solid red"; 
                         alert("Merchant Business Registration Already Exist");
                        
                    }
                  
                  
                },
                error: function(jqXHR, textStatus, errorThrown) {
                   console.log(textStatus, errorThrown);
                }
                });
                    
                
            }
            
             function onlyNumberKey(evt) {
          
        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
    
        


    function validateEmail(email) {
          const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          return re.test(email);
        }
        
        function validate() {
          const $result = $("#emailResult");
          const email = $("#email").val();
          $result.text("");
        
          if (validateEmail(email)) {
            $result.text(email + " is valid");
            $result.css("color", "green");
          } else {
               document.getElementById("submit").disabled = false; 
            $result.text(email + " is not valid");
            $result.css("color", "red");
          }
          return false;
        }
        
        // $( document ).ready(function() {
    
        // $("#email").on("input", validate);
        // });



        </script>
                <?php include_once('footer.php') ;?>
