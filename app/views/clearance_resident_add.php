<?php
if ($lists) {
    foreach ($lists as $list) {

        // for age
        $dateOfBirth = $list->res_dob;
        $dateToday = date("m/d/Y");
        $ageDiff = date_diff(date_create($dateOfBirth), date_create($dateToday));
        // END for age
        ?>

        <form  action="<?php echo base_url('clearance/clearance_resident_add'); ?>" method="post" name="resident_clearance_form" class="validate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Clearance Details | Resident Clearance ID No.:
                                <input type="text" name="clearance_resident_id" class="readonly readonlyfld" readonly value="RBC-<?php echo date('y') . '-' . date('mdHis'); ?>" />
                            </h3>
                        </div>
                        <!-- left -->
                        <div class="col-lg-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="ResidentName">Resident Name <span class="req">*</span></label>
                                    <input name="ResidentName" id="ResidentName"  type="text" class="form-control" autocomplete="off" placeholder="Enter Resident Name" value="<?php echo $list->res_firstname . ' ' . $list->res_middlename . ' ' . $list->res_lastname.' '.$list->res_extension; ?>" readonly="readonly" />
                                </div>
                                <div class="form-group">
                                    <label for="Age">Age <span class="req">*</span></label>
                                    <input name="Age" id="Age" type="text" class="form-control" value="<?php echo $ageDiff->format('%y'); ?>" readonly="readonly" />
                                </div>
                                <div class="form-group">
                                    <label for="Address">Address <span class="req">*</span></label>
                                    <input name="Address" type="text" class="form-control" value="<?php echo $list->res_house_number . ' ' . $list->res_street . ' ' . $list->res_purok; ?>" readonly="readonly" />
                                </div>

                                <!-- /.form-group --> 
                            </div>
                        </div>
                        <!-- left END --> 

                        <!-- right -->

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="PurposeOfClearance">Clearance Purpose <span class="req">*</span></label>
                                <textarea name="PurposeOfClearance" type="text" class="form-control" placeholder="Enter Purpose" style="height: 100px;"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-6 no-pad-left">
                                    <label for="DateIssued">Date Issued <span class="req">*</span></label>
                                    <input name="DateIssued" type="text" class="readonly readonlyfld" readonly value="<?php echo date('m/d/Y'); ?>" />
                                </div>
                                <div class="col-lg-6">
                                    <label for="DateExpire">Valid Until <span class="req">*</span></label>
                                    <input name="DateExpire" type="text" class="readonly readonlyfld" readonly value="12/12/<?php echo date('Y'); ?>" />
                                </div>
                                <div class="clearBoth"></div>
                            </div>
                            <div class="form-group text-right">
                                <input type="submit" value="Add Clearance" class="btn btn-success" />
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
