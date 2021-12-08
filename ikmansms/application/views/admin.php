<?php include_once('header.php') ;?>


<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <?php
                
                if($message =="success"){
                    
                    echo '  <div class="alert alert-success" role="alert">
                                          Success
                                        </div>';
                    
                }
                  if($message =="fail"){
                    
                    echo '  <div class="alert alert-danger" role="alert">
                                          Please try again later
                                        </div>';
                    
                }
                if($message =="duplicate"){
                    
                    echo '  <div class="alert alert-danger" role="alert">
                                        Duplicate data  please try again later
                                        </div>';
                    
                }
                
                ?>




            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Admin Registration</h4>

                            <a type="button" data-bs-toggle="modal" data-bs-target="#myModal"
                                class="btn btn-success waves-effect waves-light">
                                Add New Admin</a>

                        </div>

                        <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Add New Admin</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close" onclick="resetForm1()"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" id="adminform" method="post"
                                            action="<?php echo base_url()?>Admin/Add" novalidate>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Name</label>
                                                        <input type="text" class="form-control" id="name_id"
                                                            onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"
                                                            maxlength="30" onkeyup="AdminNameValidation(this.value)"
                                                            placeholder="Name" maxlength="30" name="name" required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Please enter admin name
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Admin
                                                            Level</label>
                                                        <select class="form-control" id="sel1" name="level">
                                                            <option value="1">Admin</option>
                                                            <option value="0">Super Admin</option>


                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please select admin level
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
                                                        <label class="form-label"
                                                            for="validationCustom03">Username</label>
                                                        <input type="text" class="form-control" id="username_id"
                                                            onkeyup="AdminUsernameValidation(this.value)"
                                                            placeholder="Username" maxlength="30" name="username"
                                                            value="" required>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid username.
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="validationCustom04">Password</label>
                                                        <input type="password" class="form-control"
                                                            id="validationCustom04" placeholder="Password"
                                                            name="password" minlength="8" required>
                                                        <div class="invalid-feedback">
                                                            Password should be a minimum of 8 characters
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom02">Admin
                                                                Status</label>
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

                                            <button class="btn btn-success" id="submit" type="submit">Submit</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" id="submit" class="btn btn-secondary waves-effect"
                                            onclick="resetForm1()" data-bs-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="card-body">
                                        <form class="needs-validation" novalidate>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Name</label>
                                                        <input type="text" class="form-control" id="validationCustom01"  placeholder="First name" name="name" required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Admin Level</label>
                                                        <select class="form-control" id="sel1" name="level">
                                                            <option>Super Admin</option>
                                                            <option>Admin</option>
                                                         
                                                        </select>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom03">Username</label>
                                                        <input type="text" class="form-control" id="validationCustom03" placeholder="City" name="username" required>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid username.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom04">Passowrd</label>
                                                        <input type="text" class="form-control" id="validationCustom04" placeholder="State"  name="password" required>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid passord.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Admin Level</label>
                                                        <select class="form-control" id="sel1" name="level">
                                                            <option>Super Admin</option>
                                                            <option>Admin</option>
                                                         
                                                        </select>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="invalidCheck" required>
                                                            <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                                                            <div class="invalid-feedback">
                                                                You must agree before submitting.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-success" type="submit">Submit form</button>
                                        </form>
                                    </div> -->
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
                            <h4 class="card-title">Admin List</h4>
                            <!-- <p class="card-title-desc">DataTables has most features enabled by
                                            default, so all you need to do to use it with your own tables is to call
                                            the construction function: <code>$().DataTable();</code>.
                                        </p> -->
                        </div>
                        <div class="card-body">

                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Level</th>
                                        <th>Username</th>

                                        <th>Status</th>
                                        <th>Added Date</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>


                                <tbody>


                                    <?php

                                                $i=1;
                                                foreach($admin_list->result() as $row) :
                                                ?>

                                    <tr>




                                        <td><?php echo $row->admin_name;?></td>
                                        <td> <?php echo $row->admin_level == 1 ? 'Admin':'Super Admin';  ?></td>
                                        <td><?php echo $row->admin_username;?></td>


                                        <td> <?php echo $row->admin_status == 1 ? 'Active':'Inactive';  ?></td>
                                        <td><?php echo $row->admin_created_date;?></td>

                                        <td>

                                            <i style="padding:10px" class="bx bx-remove-alt" data-bs-toggle="modal"
                                                data-bs-target="#myModal<?php echo $row->admin_id;?>"> <i
                                                    class="bx bx-edit-alt"></i> </i>
                                            <div id="myModal<?php echo $row->admin_id;?>" class="modal fade"
                                                data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Update Admin
                                                                Information</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="needs-validation" method="post"
                                                                action="<?php echo base_url()?>Admin/Update" novalidate>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="validationCustom01">Name</label>
                                                                            <input type="text" class="form-control"
                                                                                onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"
                                                                                id="new_update_name<?php echo $row->admin_id;?>"
                                                                                value="<?php echo $row->admin_name;?>"
                                                                                onchange="validateUpdateName(this.value,<?php echo $row->admin_id;?>)"
                                                                                placeholder="First name" name="name"
                                                                                required>
                                                                            <div class="valid-feedback">
                                                                                Looks good!
                                                                            </div>
                                                                            <div class="invalid-feedback">
                                                                                Please enter admin name
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden"
                                                                        value="<?php echo $row->admin_name;?>"
                                                                        id="hidden_update_name<?php echo $row->admin_id;?>"
                                                                        name="old_name">
                                                                    <input type="hidden"
                                                                        value="<?php echo $row->admin_username;?>"
                                                                        id="hidden_update_username<?php echo $row->admin_id;?>"
                                                                        name="old_username">
                                                                    <input type="hidden"
                                                                        value="<?php echo $row->admin_id;?>" name="id">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="validationCustom02">Admin
                                                                                Level</label>
                                                                            <select class="form-control" id="sel1"
                                                                                name="level">


                                                                                <?php echo $row->admin_level == 1 ? ' <option value="1">Admin</option>' : ' <option value="0">Super Admin</option>'; ?>

                                                                                <?php    echo   $row->admin_level == 1 ?'<option style="display:none"></option>':'<option value="1">Admin</option>';?>

                                                                                <?php    echo   $row->admin_level == 0 ?'<option style="display:none"></option>':'<option value="0">Super Admin</option>';?>

                                                                            </select>
                                                                            <div class="valid-feedback">
                                                                                Looks good!
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="validationCustom03">Username</label>
                                                                            <input type="text" class="form-control"
                                                                                id="new_update_username<?php echo $row->admin_id;?>"
                                                                                maxlength="30"
                                                                                value="<?php echo $row->admin_username;?>"
                                                                                onchange="validateUpdateUserName(this.value,<?php echo $row->admin_id;?>)"
                                                                                name="username" required>
                                                                            <div class="invalid-feedback">
                                                                                Please provide a valid username.
                                                                            </div>
                                                                            <div class="valid-feedback">
                                                                                Looks good!
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="validationCustom04">Password</label>
                                                                            <input type="password" class="form-control"
                                                                                id="validationCustom04" minlength="8"
                                                                                value="<?php echo $row->admin_pass;?>"
                                                                                placeholder="State" name="password"
                                                                                required>
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
                                                                                <label class="form-label"
                                                                                    for="validationCustom02">Admin
                                                                                    Status</label>


                                                                                <select class="form-control" id="sel1"
                                                                                    name="status">
                                                                                    <?php echo $row->admin_status == 1 ? ' <option value="1">Active</option>' : ' <option value="0">Inactive</option>'; ?>

                                                                                    <?php    echo   $row->admin_status == 1 ?'<option style="display:none"></option>':'<option value="1">Active</option>';?>
                                                                                    <?php    echo   $row->admin_status == 0 ?'<option style="display:none"></option>':'<option value="0">Inactive</option>';?>


                                                                                </select>

                                                                                <div class="valid-feedback">
                                                                                    Looks good!
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <button class="btn btn-success"
                                                                    id="update_submit<?php echo $row->admin_id;?>"
                                                                    type="submit">Submit</button>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary waves-effect"
                                                                data-bs-dismiss="modal">Close</button>

                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

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

<script>
function resetForm1() {

    document.getElementById("adminform").reset();

    document.getElementById("name_id").style.border = "1px  solid grey";
    document.getElementById("username_id").style.border = "1px  solid grey";
    location.reload();
}



function AdminUsernameValidation(value) {

    if (value.length != 0) {


        $.ajax({
            url: "<?php echo base_url();?>Admin/AdminUsernameValidation",
            type: "post",
            data: {
                value: value
            },
            success: function(response) {


                if (response == 0) {

                    //Following condition validate name field alredy exist or not

                    var name_color = document.getElementById("name_id").style.borderColor;

                    if (name_color != "red") {
                        document.getElementById("submit").disabled = false;
                    }


                    document.getElementById("username_id").style.border = "1px solid green";

                } else {

                    document.getElementById("submit").disabled = true;
                    document.getElementById("username_id").style.border = "1px solid red";
                    alert("Admin Username Already Exist");

                }


            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });

    }



}



function validateUpdateUserName(name, id) {

    var new_name = document.getElementById('new_update_username' + id).value;
    var old_name = document.getElementById('hidden_update_username' + id).value;



    if (old_name != new_name) {

        $.ajax({
            url: "<?php echo base_url();?>Admin/AdminUsernameValidation",
            type: "post",
            data: {
                value: new_name
            },
            success: function(response) {

                if (response == 0) {

                    //Following condition validate username field alredy exist or not

                    var name_color = document.getElementById("new_update_name" + id).style.borderColor;

                    if (name_color != "red") {

                        document.getElementById("update_submit" + id).disabled = false;

                    }

                    document.getElementById("new_update_username" + id).style.border = "1px solid green";



                } else {

                    document.getElementById("update_submit" + id).disabled = true;

                    document.getElementById("new_update_username" + id).style.border = "1px solid red";

                    alert("Admin Name Already Exist");

                }


            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    }



}



function validateUpdateName(name, id) {


    var new_name = document.getElementById('new_update_name' + id).value;
    var old_name = document.getElementById('hidden_update_name' + id).value;

    if (old_name != new_name) {

        $.ajax({
            url: "<?php echo base_url();?>Admin/AdminNameValidation",
            type: "post",
            data: {
                value: new_name
            },
            success: function(response) {

                if (response == 0) {

                    //Following condition validate username field alredy exist or not

                    var username_color = document.getElementById("new_update_username" + id).style
                        .borderColor;

                    if (username_color != "red") {

                        document.getElementById("update_submit" + id).disabled = false;

                    }

                    document.getElementById("new_update_name" + id).style.border = "1px solid green";



                } else {

                    document.getElementById("update_submit" + id).disabled = true;

                    document.getElementById("new_update_name" + id).style.border = "1px solid red";

                    alert("Admin Name Already Exist");

                }


            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    }



}

function AdminNameValidation(value) {

    $.ajax({
        url: "<?php echo base_url();?>Admin/AdminNameValidation",
        type: "post",
        data: {
            value: value
        },
        success: function(response) {

            if (response == 0) {
                //Following condition validate username field alredy exist or not
                var username_color = document.getElementById("username_id").style.borderColor;

                if (username_color != "red") {


                    document.getElementById("submit").disabled = false;

                }

                document.getElementById("name_id").style.border = "1px solid green";

            } else {

                document.getElementById("submit").disabled = true;

                document.getElementById("name_id").style.border = "1px solid red";
                alert("Admin Name Already Exist");

            }


        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });


}
</script>
<?php include_once('footer.php') ;?>