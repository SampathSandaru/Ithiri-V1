<?php include_once('header.php'); ?>


<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Send Messages to Customers</h4>
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
                    <?php echo form_open('user_customer/User_customer/send_msg_customer');?>
                    <form class="needs-validation" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Select</label>
                                    <label class="fieldlabels">Contact Numbers: *</label>
                                    <?php
                                        foreach ($customer_numbers->result() as $data){
                                    ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="contact[]"
                                            value="<?php echo $data->contact_no?>" />
                                        <label class="form-check-label" for="flexCheckDefault">
                                           <?php echo $data->contact_no?>
                                        </label>
                                    </div>
                                    <?php }?>
                                    <small class="text-danger"><?php echo form_error('contact'); ?></small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom03">Enter Message</label>
                                    <textarea class="form-control" name="message"
                                        placeholder="Enter Message here" cols="30" rows="5" ></textarea>
                                    <small class="text-danger"><?php echo form_error('message'); ?></small>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-success" type="submit">Send Message
                        </button>
                    </form>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <row class="row mt-4">
                <div class="col-md-8">
                <?php echo form_open('user_customer/User_customer/searcg_msg_log');?>
                    <form  method="post">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">From Date</label>
                            <input type="datetime-local" class="form-control" name="from_date" value="<?php echo set_value('from_date')?>" required>
                            <small class="text-danger"><?php echo form_error('from_date'); ?></small>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">To Date</label>
                            <input type="datetime-local" class="form-control" name="to_date" value="<?php echo set_value('to_date')?>" required>
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
            <div class="row mt-2">
                <div class="col-md-12">
                    <table class="table table-bordered dt-responsive  nowrap w-100">
                        <tr>
                            <th>Contact Number</th>
                            <th>Message</th>
                            <th>Send Time </th>
                            <th>Message Id </th>
                            <th>Status  </th>
                        </tr>
                        <?php
                           foreach ($get_msg_log->result() as $data){
                        ?>
                        <tr>
                            <td><?php echo $data->mobile_numbers?></td>
                            <td><?php echo $data->message?></td>
                            <td><?php echo $data->sended_time?></td>
                            <td><?php echo $data->message_id?></td>
                            <td><?php echo $data->status?></td>
                        </tr>
                        <?php }?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('footer.php') ;?>