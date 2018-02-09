
<?php
if ($lists) {
    foreach ($lists as $list) {

        // for age
        $dateOfBirth = $list->res_dob;
        $dateToday = date("m/d/Y");
        $ageDiff = date_diff(date_create($dateOfBirth), date_create($dateToday));

        // END for age

        function checkVal($x) {
            if ($x == 1) {
                return "Yes";
            } else {
                return "No";
            }
        }
        ?>


        <div class="row">
            <div class="col-lg-10"><a href="<?php echo base_url('clearance/clearance_resident_view/' . $list->res_id); ?>" class="btn btn-success btn-clearance ">Issue Clearance</a> <a href="<?php echo base_url('residents/edit/' . $list->res_id); ?>" class="btn btn-warning">Edit Profile</a> <a href="<?php echo base_url(); ?>judicial/judicial_resident_cases" class="btn btn-vk hide">View Case(s)</a></div>
            <div class="col-lg-2 text-right"><a href="<?php echo base_url('residents/delete/' . $list->res_id); ?>" class="btn btn-danger deletebtn">Delete Profile</a></div>
            <div class="clearBoth"></div>
        </div>
        <br/>
        <?php
        if ($rescase) {
            foreach ($rescase as $rescase) {
                ?>
        
        <!-- modal -->
        <div class="modal fade modal-danger" id="modalAlert">

            <div class="modal-content">
                <div class="col-lg-12 text-center">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon fa fa-ban"></i> <strong>Alert!</strong>
                        This resident has an existing judicial case! Clearance Issuance has been disabled for this resident. 
                        Case ID: <?php echo $rescase->kp07_casenumber; ?>. <a href="<?php echo base_url('/judicial/kp07_view/') . $rescase->kp07_casenumber; ?>">view case</a></div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(window).on('load', function () {
                $('#modalAlert').modal('show', {backdrop: 'static'});
            });
        </script>
        
        <!-- modal END -->
        
        
        
        
        
                <div class="col-lg-12">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                        This resident has an existing judicial case! Clearance Issuance has been disabled for this resident.<br/>
                        Case ID: <?php echo $rescase->kp07_casenumber; ?>. <a href="<?php echo base_url('/judicial/kp07_view/') . $rescase->kp07_casenumber; ?>">view case</a></div>
                </div>


                <script type="text/javascript">
                    jQuery('.btn-clearance').addClass("disabled");
                </script>


                <?php
            }
        }
        ?>
        <br class="clearBoth" />
        <div class="row resprofile">
            <div class="col-lg-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Resident Profile | ID Number: <?php echo $list->res_idnumber; ?> </h3>
                    </div>
                    <!-- left -->
                    <div class="col-lg-6">
                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <div class="res-photo res-large text-center"><img src="<?php
                                        if (!empty($list->res_photo)) {
                                            echo base_url() . $list->res_photo;
                                        }
                                        ?>" alt="" /><a href="#" data-toggle="modal" data-target="#modal-default">(update?)</a></div>
                                </div>
                                <div class="col-md-6"><?php echo $list->res_firstname . ' ' . $list->res_middlename . ' ' . $list->res_lastname . ' ' . $list->res_extension; ?><br>
                                    <?php echo $list->res_dob; ?> &bull; <?php echo $ageDiff->format('%y'); ?> yrs old<br>
                                    <strong>Born in</strong> <?php echo $list->res_pob; ?> &bull; <?php echo $list->res_nationality; ?><br>
                                    <strong>Religion</strong>: <?php echo $list->res_religion; ?><br>
                                    <strong>Gender</strong>: <span class="fa fa-<?php echo strtolower($list->res_gender); ?>" title="<?php echo $list->res_gender; ?>"></span></div>
                                <div class="clearBoth"></div>
                            </div>
                            <!-- /.form-group --> 
                        </div>
                    </div>
                    <!-- left END --> 

                    <!-- right -->

                    <div class="col-lg-6">
                        <div class="box-body">
                            <div class="col-md-6"> <strong>PWD</strong>: <?php echo checkVal($list->res_is_pwd); ?> &bull; <strong>Deceased</strong>: <?php echo checkVal($list->res_is_deceased); ?><br>
                                <strong>Bloodtype</strong>: <?php echo $list->res_bloodtype; ?> <br>
                                <strong>Height</strong>: <?php echo $list->res_height; ?>cm <br> <strong>Weight</strong>: <?php echo $list->res_weight; ?>kgs<br>
                            </div>
                            <div class="col-md-6">  <strong>Father</strong>:<br/><?php echo $list->res_fathers_name; ?><br>
                                <strong>Mother</strong>:<br/><?php echo $list->res_mothers_name; ?><br><strong>Spouse</strong>:<br/><?php echo $list->res_spouse; ?><br>
                            </div>
                            <div class="clearBoth"></div>

                            <!-- /.form-group --> 
                        </div>
                    </div>
                    <!-- right END -->

                    <div class="clearBoth"></div>
                </div>
            </div>

            <!-- address -->
            <div class="col-lg-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Home Address</h3>
                    </div>
                    <!-- left -->
                    <div class="col-lg-6">
                        <div class="box-body">
                            <div class="form-group"> <strong>Home Address:</strong> (<?php echo $list->res_home_ownership; ?>)<br>
                                <?php echo $list->res_house_number . ' ' . $list->res_street; ?><br>
                                <?php
                                if ($respurok) {
                                    echo 'Purok ';

                                    foreach ($respurok as $respurok) {
                                        echo $respurok->purok_name . ', ';
                                    }
                                }
                                ?>
                                <?php echo 'Brgy. ' . $list->res_barangay; ?><br>
                                <?php echo $list->res_city . ' ' . $list->res_province; ?><br>
                                <?php echo $list->res_region; ?><br>
                                <br>
                                <strong>Household ID:</strong> <?php echo $list->res_household_id; ?><br>
                                <br>
                                </div>
                            <!-- /.form-group --> 

                        </div>
                    </div>
                    <!-- left END --> 

                    <!-- right -->
                    <div class="col-lg-6">
                        <div class="box-body">
                            <div class="form-group"><strong>Contact Number:</strong> <?php echo $list->res_contact_number; ?><br>
                                
                                <strong>Email:</strong> <?php echo $list->res_email; ?> <br><br><strong>Neighbor:</strong>
                                <?php echo $list->res_neighbors; ?></div>

                            <!-- /.form-group --> 
                        </div>
                    </div>
                    <!-- right END -->

                    <div class="clearBoth"></div>
                </div>
            </div>

            <!-- other details -->
            <div class="col-lg-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Other Details</h3>
                    </div>
                    <!-- left -->
                    <div class="col-lg-6">
                        <div class="box-body">
                            <div class="form-group"> <strong>Educational Attainment:</strong> <?php echo $list->res_education; ?> <br>
                                <strong>Employment Status:</strong> <?php echo $list->res_employment_status; ?> <br>
                                <strong>DSWD NHTS?:</strong> <?php echo checkVal($list->res_is_dswdnths); ?> <br>
                                <strong>4Ps Member?:</strong> <?php echo checkVal($list->res_is_4ps); ?> <br>
                            </div>
                            <!-- /.form-group --> 
                        </div>
                    </div>
                    <!-- left END --> 

                    <!-- right -->
                    <div class="col-lg-6">
                        <div class="form-group"> <strong>PhilHealth No.:</strong> <?php echo $list->res_philhealth_id; ?> <br>
                            <strong>PhilHealth Category:</strong> <?php echo $list->res_philhealth_category; ?> <br>
                            <strong>Primary Care Benefit (PCB) Member?: </strong> <?php echo checkVal($list->res_is_pcb); ?> <br>
                        </div>
                    </div>
                    <!-- right END -->

                    <div class="clearBoth"></div>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    echo 'No record(s) to display.';
}
?>





<!--############ MODAL PHOTO UPDATE -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Update Resident Photo</h4>
            </div>
            <div class="modal-body">
                <div class="res-photo res-large col-lg-4"><img height="120" src="<?php
                    if (!empty($list->res_photo)) {
                        echo base_url() . $list->res_photo;
                    }
                    ?>" alt="" />

                </div>
                <div class="col-lg-8"><form  action="<?php echo base_url('residents/edit_resident_photo/') . $list->res_id; ?>" method="post" name="resident_form"  enctype="multipart/form-data" class="validate"><small>(max size: 3mb)</small><input name="UploadPhoto" type="file" id="" accept='image/*' class="imgfile" /><br/><input type="submit" value="Update Photo" class="btn btn-success" /></form></div>
                <div class="clearboth"></div>

            </div>
            <div class="modal-footer">
                <!--                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!--############ MODAL PHOTO UPDATE END -->