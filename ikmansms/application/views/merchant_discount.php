<?php include_once('header.php') ;?>




            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">


                    
                   
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">

                                    <a href="<?php echo base_url()?>Merchant" type="button" class="btn btn-success waves-effect waves-light">
                                    <i class="bx bx-back font-size-16 align-middle me-2"></i>          Back To Merchant
</a>

<br><br><br>

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
                                                <th>Name</th>
                                                                                          
                                                <th>Status</th>
                                                
                                             
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                         <?php

                                        $i=1;
                                        foreach($discount_list->result() as $row) :
                                        ?>       
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $row->disc_title;?></td>
                                               
                                                <td>  <?php echo $row->disc_status == 1 ? 'Active':'Inactive';?></td>
                                            
                                               
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
                <?php include_once('footer.php') ;?>
