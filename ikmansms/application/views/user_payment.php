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
                                <label class="form-label" for="validationCustom01">Masking</label>
                                    <select class="form-control" name="masking_id">
                                        <option value="">Select Masking</option>
                                        <?php
                                            foreach($maskingIds->result() as $maskingId){
                                        ?>
                                        <option value="<?php echo $maskingId->user_masking_id;?>">
                                            <?php echo $maskingId->masking;?></option>
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
<?php include_once('footer.php') ;?>