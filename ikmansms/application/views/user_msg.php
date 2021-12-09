<?php include_once('header.php'); ?>


<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Message Log</h4>
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
                    <?php echo form_open('User/SearchMsgLog');?>
                    <form class="needs-validation" method="post">
                        <div class="row">
                            <div class="col-md-3">
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
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom02">From Date</label>
                                    <input type="date" class="form-control" name="from_date" value="<?php echo set_value('from_date')?>" required>
                                    <small class="text-danger"><?php echo form_error('from_date'); ?></small>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">To Date</label>
                                    <input type="date" class="form-control" name="to_date" value="<?php echo set_value('to_date')?>" required>
                                    <small class="text-danger"><?php echo form_error('to_date'); ?></small>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                <button class="btn btn-success mt-4" type="submit">View</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <table class="table table-bordered dt-responsive  nowrap w-100">
                        <tr>
                            <th>User ID</th>
                            <th>Message</th>
                            <th>Sended Time</th>
                            <th>status</th>
                        </tr>
                        <?php
                            foreach ($msglog->result() as $data){
                        ?>
                        <tr>
                            <td><?php echo $data->user_id?></td>
                            <td><?php echo $data->message?></td>
                            <td><?php echo $data->sended_time?></td>
                            <td><?php echo $data->status == 1 ? 'Active' : 'Deactivate';?></td>
                        </tr>
                        <?php }
                            if(empty($msglog->result())){
                                echo "<tr>
                                    <td colspan='4' style='text-align:center'>Record  Empty</td>
                                </tr>";
                            }
                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('footer.php') ;?>