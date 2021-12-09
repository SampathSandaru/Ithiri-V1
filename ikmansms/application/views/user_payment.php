<?php include_once('header.php'); ?>


<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">User Payment</h4>
                        </div>
                    </div>
                    <?php
                    if($this->session->flashdata('status')){
                        echo " <div class=\"alert alert-success\">";
                        echo $this->session->flashdata('status');
                        echo "</div>";
                    }else if($this->session->flashdata('Error_status')){
                        echo " <div class=\"alert alert-danger\">";
                        echo $this->session->flashdata('Error_status');
                        echo "</div>";
                    }
                    ?>
                    <?php echo form_open('User/AddPayment');?>
                    <form class="needs-validation" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                <label class="form-label" for="validationCustom01">Masking ID</label>
                                    <select class="form-control" name="masking_id">
                                        <option value="">Select Masking ID</option>
                                        <?php
                                            foreach($maskingIds->result() as $maskingId){
                                        ?>
                                        <option value="<?php echo $maskingId->user_masking_id;?>">
                                            <?php echo $maskingId->user_masking_id;?></option>
                                        <?php }?>
                                    </select>
                                    <small class="text-danger"><?php echo form_error('masking_id'); ?></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom02">Amount</label>
                                    <input type="text" class="form-control" name="amount" pattern="[0-9 .]+" placeholder="Amount"
                                        value="<?php echo set_value('amount')?>">
                                    <small class="text-danger"><?php echo form_error('amount'); ?></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Paid Date</label>
                                    <input type="date" class="form-control" name="paid_date" required>
                                    <small class="text-danger"><?php echo form_error('padi_date'); ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom03">Discount Amount</label>
                                    <input type="text" class="form-control" name="discount_amount"  placeholder="Discount Amount" value="<?php echo set_value('discount_amount')?>">
                                    <small class="text-danger"><?php echo form_error('discount_amount'); ?></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom02">Status</label>
                                        <select class="form-control" id="sel1" name="paymentStatus">
                                            <option value="">Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">Deactive</option>
                                        </select>
                                        <small class="text-danger"><?php echo form_error('paymentStatus'); ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-success" type="submit">Submit</button>
                    </form>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <row class="row mt-3">
                <div class="col-md-8">
                <?php echo form_open('User/SearchDate');?>
                    <form  method="post">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">From Date</label>
                            <input type="date" class="form-control" name="from_date" value="<?php echo set_value('from_date')?>" required>
                            <small class="text-danger"><?php echo form_error('from_date'); ?></small>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">To Date</label>
                            <input type="date" class="form-control" name="to_date" value="<?php echo set_value('to_date')?>" required>
                            <small class="text-danger"><?php echo form_error('to_date'); ?></small>
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-success mt-4" type="submit">Search
                        </button>
                        </div>
                    </div>
                    </form>
                <?php echo form_close(); ?>
                </div>
            </row>
            <div class="row mt-3">
                <div class="col-md-12">
                    <table class="table table-bordered dt-responsive  nowrap w-100">
                        <tr>
                            <th>User Masking ID</th>
                            <th>Masking ID</th>
                            <th>Amount</th>
                            <th>Paid Date</th>
                            <th>Discount Amount</th>
                            <th>Status</th>
                        </tr>
                        <?php
                            foreach ($PayemntData->result() as $data){
                        ?>
                        <tr>
                            <td><?php echo $data->user_payment_id?></td>
                            <td><?php echo $data->masking_id?></td>
                            <td><?php echo $data->amount?></td>
                            <td><?php echo $data->paid_date?></td>
                            <td><?php echo $data->discount_amount?></td>
                            <td><?php echo $data->status == 1 ? 'Active' : 'Deactivate';?></td>
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
                                    placeholder="0xxxxxxxxx" name="phone" maxlength="10" required>
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

                                    <select class="form-control" id="olduserstatus" name="userStatus">
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                        <option value="2">Deleted</option>
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
    document.getElementById('olduserstatus').value = status;

}

function deleteUser(id) {
    document.getElementById('user_id').value = id;
}
</script>

<?php include_once('footer.php') ;?>