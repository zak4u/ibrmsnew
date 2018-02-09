<?php
if ($lists) {
    foreach ($lists as $list) {
        ?>
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Clearance Details
                            </h3>
                        </div>
                        <!-- left -->
                        <div class="col-lg-6">
                            <div class="box-body">
                                <div class="form-group"><p><strong>Business Clearance ID No.</strong>: <?php echo $list->bc_idnumber; ?></p></div>
                                <div class="form-group"><p><strong>Owner's Name</strong>: <?php echo $list->bc_title; ?> <?php echo $list->bc_name; ?></p></div>
                                <div class="form-group"><p><strong>Owner's Address</strong>: <?php echo $list->bc_address; ?></p></div>
                                <div class="form-group"><p><strong>O.R. Number</strong>: <?php echo $list->bc_or_number; ?></p></div>




                                <!-- /.form-group --> 
                            </div>
                        </div>
                        <!-- left END --> 

                        <!-- right -->

                        <div class="col-lg-6">
                            
                            
                            <div class="form-group"><p><strong>Business Name</strong>: <?php echo $list->bc_business_name; ?> [<?php echo $list->bc_business_type; ?>]</p></div>
                            <div class="form-group"><p><strong>Business Address</strong>: <?php echo $list->bc_business_address; ?></p></div>
                            <div class="form-group"><p><strong>Certificate Validity</strong>: <?php echo $list->bc_issued; ?> - <?php echo $list->bc_validity; ?></p></div>
                            
                            
                           
                            
                            

                             
                            <div class="form-group text-right">
                                <input type="hidden" name="bc_id" value="<?php echo $list->bc_id; ?>" />
                                <a class="btn btn-success" href="<?php echo base_url('clearance/clearance_business_edit/' . $list->bc_id); ?>">Edit Clearance</a>
                                <a class="btn btn-vk" href="#">Print Clearance</a>
                                
                            </div>
                        </div>
                        <!-- right END -->

                        <div class="clearBoth"></div>
                    </div>
                </div>
            </div>
       
        <?php
    }
}
?>
