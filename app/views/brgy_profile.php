<?php
$session_data = $this->session->userdata('logged_in');

?>

<?php
	if($lists){
		foreach($lists as $list){

?>
<form action="<?php echo base_url('brgy/edit_brgy'); ?>" method="post" name="brgy_form" class="validate" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="col-lg-6">
                        <h3 class="box-title">Barangay Details</h3>
                    </div>
                    <div class="col-lg-6 text-right">
                        <input type="submit" value="Update Profile" class="btn btn-success" />
                    </div>
                    <div class="clearBoth"></div>
                </div>

                <!-- left -->
                <div class="col-lg-6">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="BarangayName">Barangay Name <span class="req">*</span></label>
                            <input name="bp_name" value="<?php echo $list->bp_name; ?>" type="text" class="form-control" placeholder="Enter Barangay Name" />
                        </div>
                        
                        <div class="form-group">
                            <label for="BarangayCaptain">Barangay Captain <span class="req">*</span></label>
                            <input name="bp_captain" value="<?php echo $list->bp_captain; ?>" type="text" class="form-control" placeholder="Enter Barangay Captain Name" />
                        </div>
                        <div class="form-group">
                            <label for="BarangayKagawad">Barangay Kagawad 1 <span class="req">*</span></label>
                            <input name="bp_k1" value="<?php echo $list->bp_k1; ?>" type="text" class="form-control" placeholder="Enter Barangay Kagawad Name" />
                        </div>
                        <div class="form-group">
                            <label for="BarangayKagawad">Barangay Kagawad 2 <span class="req">*</span></label>
                            <input name="bp_k2" value="<?php echo $list->bp_k2; ?>" type="text" class="form-control" placeholder="Enter Barangay Kagawad Name" />
                        </div>
                        <div class="form-group">
                            <label for="BarangayKagawad">Barangay Kagawad 3 <span class="req">*</span></label>
                            <input name="bp_k3" value="<?php echo $list->bp_k3; ?>" type="text" class="form-control" placeholder="Enter Barangay Kagawad Name" />
                        </div>
                        <div class="form-group">
                            <label for="BarangayKagawad">Barangay Kagawad 4 <span class="req">*</span></label>
                            <input name="bp_k4" value="<?php echo $list->bp_k4; ?>" type="text" class="form-control" placeholder="Enter Barangay Kagawad Name" />
                        </div>
                        <div class="form-group">
                            <label for="BarangayKagawad">Barangay Kagawad 5 <span class="req">*</span></label>
                            <input name="bp_k5" value="<?php echo $list->bp_k5; ?>" type="text" class="form-control" placeholder="Enter Barangay Kagawad Name" />
                        </div>
                        <div class="form-group">
                            <label for="BarangayKagawad">Barangay Kagawad 6 <span class="req">*</span></label>
                            <input name="bp_k6" value="<?php echo $list->bp_k6; ?>" type="text" class="form-control" placeholder="Enter Barangay Kagawad Name" />
                        </div>
                        <div class="form-group">
                            <label for="BarangayKagawad">Barangay Kagawad 7 <span class="req">*</span></label>
                            <input name="bp_k7" value="<?php echo $list->bp_k7; ?>" type="text" class="form-control" placeholder="Enter Barangay Kagawad Name" />
                        </div>
                        <!-- /.form-group --> 
                    </div>
                </div>
                <!-- left END --> 

                <!-- right -->

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="BarangaySecretary">Barangay Secretary <span class="req">*</span></label>
                        <input name="bp_secretary" value="<?php echo $list->bp_secretary; ?>" type="text" class="form-control" placeholder="Enter Barangay Secretary Name" />
                    </div>
                    <div class="form-group">
                        <label for="BarangayTreasurer">Barangay Treasurer <span class="req">*</span></label>
                        <input name="bp_treasurer" value="<?php echo $list->bp_treasurer; ?>" type="text" class="form-control" placeholder="Enter Barangay Treasurer Name" />
                    </div>
                    
                    <div class="form-group">
                            <label for="BarangayAddress">Barangay Address <span class="req">*</span></label>
                            <textarea name="bp_address" type="text" class="form-control" placeholder="Enter Barangay Address"><?php echo $list->bp_address; ?></textarea>
                        </div>
                    <div class="form-group">
                        <label for="BarangayCity">City <span class="req">*</span></label>
                        <input name="bp_city" value="<?php echo $list->bp_city; ?>" type="text" class="form-control" placeholder="Enter City" />
                    </div>
                    <div class="form-group">
                        <label for="BarangayProvince">Province <span class="req">*</span></label>
                        <input name="bp_province" value="<?php echo $list->bp_province; ?>" type="text" class="form-control" placeholder="Enter Province" />
                    </div>
                    <div class="form-group">
                        <label for="BarangayRegion">Region <span class="req">*</span></label>
                        <input name="bp_region" value="<?php echo $list->bp_region; ?>" type="text" class="form-control" placeholder="Enter Region" />
                    </div>
                    
                    <div class="form-group res-photo">
                        <div class="col-lg-5">
                            <label for="UploadPhoto">Upload Logo</label>
                            <input name="bp_logo" type="file" id=""/>
                        </div>
                        <img width="100%" style="max-width: 100px" src="template/sourcefiles/images/brgy2-logo-trans.png" />
                        
                        <div class="clearBoth"></div>
                    </div>
                    
                    <div class="form-group text-right">
                        <input type="submit" value="Update Profile" class="btn btn-success" />
                    </div>
                </div>
                <!-- right END -->

                <div class="clearBoth"></div>
            </div>
        </div>
    </div>
</form>
<?php
                    }
                }
    ?>
