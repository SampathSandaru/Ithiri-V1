<?php include_once('header.php') ;?>




            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">History and Reporting</h4>
                                        <!-- <p class="card-title-desc">DataTables has most features enabled by
                                            default, so all you need to do to use it with your own tables is to call
                                            the construction function: <code>$().DataTable();</code>.
                                        </p> -->
                                    </div>
                                    
                                       <div class="card-body">
        
    <!--     <form method="post" action="<?php echo base_url(); ?>excel_export/action">-->
             
    <!-- <input type="submit" name="export" class="btn btn-success" value="Export Data" />-->
    <!--</form>-->
                                        <!--<button class="btn btn-success"></button>-->
                                        
                         <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Merchant</th>
                                                <th>Date</th>
                                                <th>Amount(LKR)</th>
                                                <th>Customer ID</th>
                                             
                                            </tr>
                                            </thead>
        
        
                                            <tbody>



                                            <?php

                                                $i=1;
                                                foreach($report_list->result() as $row) :
                                                ?>


                                               <tr>                     
                      
                  
                                              
                                                <td><?php echo $row->trans_id;?></td>
                                                <td><?php echo $row->mer_name;?></td>
                                                <td><?php echo $row->trans_date;?></td>
                                                <td><?php echo $row->trans_amount;?></td>
                                                <td><?php echo $row->cust_id;?></td>
                                                
                                               




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
                <?php include_once('footer.php') ;?>
