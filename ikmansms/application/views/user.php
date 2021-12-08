<?php include_once('header.php'); ?>


<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">New User Registration</h4>
                        </div>
                    </div>
                    <?php
                    if(validation_errors()){
                        echo " <div class=\"alert alert-danger\">";
                        echo $this->session->flashdata('status');
                        echo "</div>";
                    }else if($this->session->flashdata('status')){
                        echo " <div class=\"alert alert-success\">";
                        echo $this->session->flashdata('status');
                        echo "</div>";
                    }
                    ?>
                    <?php echo form_open('User/AddUser');?>
                    <form class="needs-validation" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom01">Name</label>
                                    <input type="text" class="form-control" placeholder="Name" name="name"
                                        pattern="[A-za-z .]+" value="<?php echo set_value('name')?>">
                                    <small class="text-danger"><?php echo form_error('name'); ?></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom02">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email"
                                        value="<?php echo set_value('email')?>">
                                    <small class="text-danger"><?php echo form_error('email'); ?></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom03">Contact</label>
                                    <input type="text" class="form-control" name="contact" placeholder="0xxxxxxxxx"
                                        maxlength="10" pattern="0[0-9]{9}" value="<?php echo set_value('contact')?>">
                                    <small class="text-danger"><?php echo form_error('contact'); ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom03">Type</label>
                                    <select class="form-control" id="sel1" name="usertype">
                                        <option value=" ">Select User Type</option>
                                        <option value="type1">Type1</option>
                                        <option value="type2">Type2</option>
                                    </select>
                                    <small class="text-danger"><?php echo form_error('usertype'); ?></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom04">Company Name</label>
                                    <input type="text" class="form-control" placeholder="Company Name"
                                        name="companyName" value="<?php echo set_value('companyName')?>">
                                    <small class="text-danger"><?php echo form_error('companyName'); ?></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom02">Status</label>
                                        <select class="form-control" id="sel1" name="userStatus">
                                            <option value="">Select User Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">Deactive</option>
                                        </select>
                                        <small class="text-danger"><?php echo form_error('userStatus'); ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-success" type="submit">Submit
                        </button>
                    </form>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <table class="table table-bordered dt-responsive  nowrap w-100">
                        <tr>
                            <th>User Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Company Name</th>
                            <th>User Status</th>
                            <th>User type</th>
                            <th>Action</th>
                        </tr>
                        <?php
				foreach ($userData->result() as $data){
			?>
                        <tr>
                            <td><?php echo $data->user_id?></td>
                            <td><?php echo $data->user_name?></td>
                            <td><?php echo $data->user_email?></td>
                            <td><?php echo $data->user_contact?></td>
                            <td><?php echo $data->user_companyName?></td>
                            <!-- <td><?php //echo $data->user_status == 1 ? 'Active': $data->user_status == 2 ?  'Deleted user' : 'Deactivate';?></td> -->
                            <td><?php echo $data->user_type?></td>
                            <td> <i style="padding:10px" class="bx bx-remove-alt" data-bs-toggle="modal"
                                    data-bs-target="#myModal"> <i class="bx bx-edit-alt"
                                        onclick="updateuser('<?php echo $data->user_id;?>','<?php echo $data->user_name;?>','<?php echo $data->user_email;?>','<?php echo $data->user_contact;?>','<?php echo $data->user_companyName;?>','<?php echo $data->user_status;?>','<?php echo $data->user_type;?>')"></i>
                                </i> <i class="fas fa-trash-alt" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    onclick="deleteUser('<?php echo $data->user_id;?>')"></i></td>
                        </tr>
                        <?php }?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="myModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Update User Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- user update form -->
            <div class="modal-body">
                <?php echo form_open('User/UpdateUser');?>
                <form class="needs-validation" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="validationCustom01">Name</label>
                                <input type="text" class="form-control" id="oldname" placeholder="Name" name="name"
                                    pattern="[A-za-z .]+" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="validationCustom02">Email</label>
                                <input type="emain" class="form-control" id="oldemail" name="email" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="validationCustom03">Contact</label>
                                <input type="text" class="form-control" id="oldcontact" name="contact"
                                    placeholder="0xxxxxxxxx" name="phone" maxlength="10" pattern="0[0-9]{9}" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="validationCustom03">Type</label>
                                <select class="form-control" id="sel1" name="usertype">
                                    <option value="type1">Type1</option>
                                    <option value="type2">Type2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="validationCustom04">Company Name</label>
                                <input type="text" class="form-control" id="oldcompanyname" placeholder="Company Name"
                                    name="companyName" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom02">Status</label>

                                    <select class="form-control" id="sel1" name="userStatus">
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="md-4">
                            <button class="btn btn-success" type="submit">Update
                            </button>
                        </div>
                    </div>
                </form>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
</div>

<!-- delete model -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this user ?
            </div>
            <div class="modal-footer">
                <?php echo form_open('User/deleteUser');?>
                <form class="needs-validation" method="post">
                    <input type="hidden" id="user_id" name="user_id">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function updateuser(id, name, email, contact, companyName, status, type) {
    document.getElementById('id').value = id;
    document.getElementById('oldname').value = name;
    document.getElementById('oldemail').value = email;
    document.getElementById('oldcontact').value = contact;
    document.getElementById('oldcompanyname').value = companyName;

}

function deleteUser(id) {
    document.getElementById('user_id').value = id;
}
</script>

<?php include_once('footer.php') ;?>