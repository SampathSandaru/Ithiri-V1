<?php include_once('header.php'); ?>


<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">User Masking</h4>
                        </div>
                    </div>
                    <?php
                    if($this->session->flashdata('Error_status')){
                        echo " <div class=\"alert alert-danger\">";
                        echo $this->session->flashdata('Error_status');
                        echo "</div>";
                    }else if($this->session->flashdata('status')){
                        echo " <div class=\"alert alert-success\">";
                        echo $this->session->flashdata('status');
                        echo "</div>";
                    }
                    ?>
                    <?php echo form_open('User/AddMasking');?>
                    <form class="needs-validation" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom01">User</label>
                                    <select class="form-control" name="user_id">
                                        <option value="">Select User</option>
                                        <?php
                                            foreach($usersId->result() as $userId){
                                        ?>
                                        <option value="<?php echo $userId->user_id;?>">
                                            <?php echo $userId->user_name;?></option>
                                        <?php }?>
                                    </select>
                                    <small class="text-danger"><?php echo form_error('user_id'); ?></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Masking</label>
                                    <input type="text" class="form-control" name="masking" placeholder="Masking"
                                        pattern="[A-za-z .]+" value="<?php echo set_value('masking')?>">
                                    <small class="text-danger"><?php echo form_error('masking'); ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Activate Date</label>
                                    <input type="date" class="form-control" name="activate_at">
                                    <small class="text-danger"><?php echo form_error('activate_at'); ?></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Deactivate Date </label>
                                    <input type="date" class="form-control" name="deactivate_at">
                                    <small class="text-danger"><?php echo form_error('deactivate_at'); ?></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">SMS Balance</label>
                                        <input type="text" class="form-control" name="smsbal" placeholder="SMS Balance"
                                            pattern="[0-9 .]+">
                                        <small class="text-danger"><?php echo form_error('smsbal'); ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom03">Package</label>
                                    <select class="form-control" id="sel1" name="package">
                                        <option value=" ">Select Package</option>
                                        <option value="type1">Type1</option>
                                        <option value="type2">Type2</option>
                                    </select>
                                    <small class="text-danger"><?php echo form_error('package'); ?></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">SMS Charge </label>
                                    <input type="text" class="form-control" placeholder="SMS Charge" name="smsCharge"
                                        value="<?php echo set_value('smsCharge')?>">
                                    <small class="text-danger"><?php echo form_error('smsCharge'); ?></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select class="form-control" id="sel1" name="status">
                                            <option value="">Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">Deactive</option>
                                        </select>
                                        <small class="text-danger"><?php echo form_error('status'); ?></small>
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
                            <th>Masking Id</th>
                            <th>User ID</th>
                            <th>Masking</th>
                            <th>Create Date</th>
                            <th>Activate Date</th>
                            <th>Deactivate Date</th>
                            <th>SMS Balance </th>
                            <th>Package</th>
                            <th>SMS Change</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php
				foreach ($maskingData->result() as $data){
			?>
                        <tr>
                            <td><?php echo $data->user_masking_id?></td>
                            <td><?php echo $data->user_id?></td>
                            <td><?php echo $data->masking?></td>
                            <td><?php echo $data->created_date?></td>
                            <td><?php echo $data->activated_date?></td>
                            <td><?php echo $data->deactivated_date?></td>
                            <td><?php echo $data->sms_balance?></td>
                            <td><?php echo $data->package?></td>
                            <td><?php echo $data->sms_charge?></td>
                            <td><?php echo $data->status == 1 ? 'Active':'Deactive';?></td>
                            <td><i style="padding:10px" class="bx bx-remove-alt" data-bs-toggle="modal"
                                    data-bs-target="#myModal"> <i class="bx bx-edit-alt"
                                        onclick="updateuser_masking('<?php echo $data->user_id;?>','<?php echo $data->user_masking_id;?>','<?php echo $data->masking;?>',
                                        '<?php echo $data->activated_date;?>','<?php echo $data->deactivated_date;?>','<?php echo $data->sms_balance;?>',
                                        '<?php echo $data->package;?>','<?php echo $data->sms_charge;?>','<?php echo $data->status;?>')"></i>
                                </i>
                                <i class="fas fa-trash-alt" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    onclick="deleteUserMask('<?php echo $data->user_masking_id;?>')"></i>
                            </td>
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
                <?php echo form_open('User/updateUserMasking');?>
                <form class="needs-validation" method="post">
                    <input type="hidden" name="masking_id" id="masking_id">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">User ID</label>
                                <input type="text" class="form-control" name="userId" id="user_id" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Masking</label>
                                <input type="text" class="form-control" name="masking"  id="oldMasking"placeholder="Masking"
                                    pattern="[A-za-z .]+" value="<?php echo set_value('masking')?>">
                                <small class="text-danger"><?php echo form_error('masking'); ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Activate Date</label>
                                <input type="date" class="form-control" name="activate_at" id="active_date">
                                <small class="text-danger"><?php echo form_error('activate_at'); ?></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Deactivate Date </label>
                                <input type="date" class="form-control" name="deactivate_at" id="deactive_date">
                                <small class="text-danger"><?php echo form_error('deactivate_at'); ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- <div class="col-md-12"> -->
                                <div class="mb-3">
                                    <label class="form-label">SMS Balance</label>
                                    <input type="text" class="form-control" name="smsbal" id="smsbalance" placeholder="SMS Balance"
                                        pattern="[0-9 .]+">
                                    <small class="text-danger"><?php echo form_error('smsbal'); ?></small>
                                </div>
                            <!-- </div> -->
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Package</label>
                                <select class="form-control"  name="package" id="packageId">
                                    <option value=" ">Select Package</option>
                                    <option value="type1">Type1</option>
                                    <option value="type2">Type2</option>
                                </select>
                                <small class="text-danger"><?php echo form_error('package'); ?></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">SMS Charge </label>
                                <input type="text" class="form-control" placeholder="SMS Charge" name="smsCharge" id="smsChargeId"
                                    value="<?php echo set_value('smsCharge')?>">
                                <small class="text-danger"><?php echo form_error('smsCharge'); ?></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- <div class="col-md-12"> -->
                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-control" name="status" id="statusId">
                                        <option value="">Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                        <option value="2">Deleted</option>
                                    </select>
                                    <small class="text-danger"><?php echo form_error('status'); ?></small>
                                </div>
                            <!-- </div> -->
                        </div>
                    </div>

                    <button class="btn btn-success" type="submit">Submit
                    </button>
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
                Are you sure you want to delete this masking?
            </div>
            <div class="modal-footer">
                <?php echo form_open('User/deleteUserMasking');?>
                <form class="needs-validation" method="post">
                    <input type="hidden" id="u_masking_id" name="masking_id">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
function updateuser_masking(user_id, masking_id, masking, activate_at, deactivate_at, smsbal, package_id, smsCharge, status) {
    document.getElementById('user_id').value = user_id;
    document.getElementById('masking_id').value = masking_id;
    document.getElementById('oldMasking').value = masking;
    document.getElementById('active_date').value = activate_at;
    document.getElementById('deactive_date').value = deactivate_at;
    document.getElementById('smsbalance').value = smsbal;
    document.getElementById('packageId').value = package_id;
    document.getElementById('smsChargeId').value = smsCharge;
    document.getElementById('statusId').value = status;
}

function deleteUserMask(id) {
    document.getElementById('u_masking_id').value = id;
}
</script>

<?php include_once('footer.php') ;?>