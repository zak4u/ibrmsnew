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
        <div class="row resprofile">
            <div class="col-lg-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Resident Profile</h3>
                    </div>
                    <!-- left -->
                    <div class="col-lg-12">
                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-md-2">
                                    <div class="res-photo res-sml"><img src="<?php if (!empty($list->res_photo)) {
            echo base_url() . $list->res_photo;
        } ?>" width="100" alt="" /></div>
                                </div>
                                <div class="col-md-5"><?php echo $list->res_firstname . ' ' . $list->res_middlename . ' ' . $list->res_lastname . ' ' . $list->res_extension; ?><br>
                                    <?php echo $list->res_dob; ?> &bull; <?php echo $ageDiff->format('%y'); ?> yrs old<br>
                                    <strong>Born in</strong> <?php echo $list->res_pob; ?> &bull; <?php echo $list->res_nationality; ?><br>
                                    <strong>Religion</strong>: <?php echo $list->res_religion; ?> &bull; <strong>Gender</strong>: <span class="fa fa-<?php echo strtolower($list->res_gender); ?>" title="<?php echo $list->res_gender; ?>"></span></div>
                                <div class="col-md-5"> <strong>PWD</strong>: <?php echo checkVal($list->res_is_pwd); ?> &bull; <strong>Deceased</strong>: <?php echo checkVal($list->res_is_deceased); ?><br>
                                    <strong>Bloodtype</strong>: <?php echo $list->res_bloodtype; ?> <br>
                                    <strong>Height</strong>: <?php echo $list->res_height; ?>cm &bull; <strong>Weight</strong>: <?php echo $list->res_weight; ?>kgs<br>
                                </div>
                                <div class="clearBoth"></div>
                            </div>
                            <!-- /.form-group --> 
                        </div>
                    </div>
                    <!-- left END -->
                    <div class="clearBoth"></div>
                </div>
            </div>
        </div>

        <!-- ######################################################LIST RESIDENT MEDICAL CASES-->

        <div class="col-md-12"> 
            <!--     Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab">ITR Form</a></li>
                    <li><a href="#tab_2" data-toggle="tab">Pedia Form</a></li>
                    <li><a href="#tab_3" data-toggle="tab">Adult Form</a></li>
                    <li id="tab_4li"><a href="#tab_4" data-toggle="tab">Prenatal Form</a></li>
                    <li><a href="#tab_5" data-toggle="tab">Referral Form</a></li>
                </ul>
                <div class="tab-content"> 

                    <!--         TAB START -->
                    <div class="tab-pane active" id="tab_1">
                        <div class="pull-left">
                            <h4>Individual Treatment Record</h4>
                        </div>
                        <div class="pull-right"><a href="<?php echo base_url('medical/itr_add/') . $list->res_id; ?>" class="btn btn-success">Add New</a></div>
                        <div class="clearboth"></div>
                        <div class="col-md-12">
                            <h4>Cases List</h4>
                            <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width="15%">Case No.</th>

                                        <th width="25%">Chief Complaint(s)</th>
                                        <th width="15%">Date/Time</th>
                                        <th width="15%">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th width="15%">Case No.</th>

                                        <th width="25%">Chief Complaint(s)</th>
                                        <th width="15%">Date/Time</th>
                                        <th width="15%">&nbsp;</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    if ($lists_itr) {
                                        foreach ($lists_itr as $itr) {
                                            ?>
                                            <tr>
                                                <td><?php echo $itr->itr_idnumber; ?></td>

                                                <td><?php echo $itr->itr_complaints; ?> (<?php echo $itr->itr_consult_mode; ?>)</td>
                                                <td><?php echo $itr->itr_date; ?> (<?php echo $itr->itr_time; ?>)</td>
                                                <td class="text-right"><a title="Print Case" data-toggle="tooltip"  href="<?php echo base_url('medical/itr_print/') . $itr->itr_id; ?>" class="glyphicon glyphicon-print viewbtn text-success"></a> <a title="Edit Case" data-toggle="tooltip" href="<?php echo base_url('medical/itr_edit/') . $itr->itr_id; ?>" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" href="<?php echo base_url('medical/itr_delete/') . $itr->itr_id . '/' . $list->res_id; ?>" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        echo 'No record(s) to display.';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="clearboth"></div>
                    </div>
                    <!--         /.tab-pane  --> 

                    <!--         TAB END --> 
                    <!--        PEDIA TAB START -->
                    <div class="tab-pane" id="tab_2">
                        <div class="pull-left">
                            <h4>Pedia Form</h4>
                            <small>For 9yrs old and below.</small>
                        </div>
                        <div class="pull-right"><a href="<?php echo base_url('medical/pedia_add/') . $list->res_id; ?>" class="btn btn-success">Add New</a></div>
                        <div class="clearboth"></div>
                        <div class="col-md-12">
                            <h4>Cases List</h4>
                            <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width="15%">Case No.</th>

                                        <th width="25%">Chief Complaint(s)</th>
                                        <th width="10%">Date/Time</th>
                                        <th width="15%">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th width="15%">Case No.</th>

                                        <th width="25%">Chief Complaint(s)</th>
                                        <th width="10%">Date/Time</th>
                                        <th width="15%">&nbsp;</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    if ($lists_pedia) {
                                        foreach ($lists_pedia as $pf) {
                                            ?>
                                            <tr>
                                                <td><?php echo $pf->pf_idnumber; ?></td>

                                                <td><?php echo $pf->pf_complaints; ?></td>
                                                <td><?php echo $pf->pf_date; ?> (<?php echo $pf->pf_time; ?>)</td>
                                                <td class="text-right"><a title="Print Case" data-toggle="tooltip"  href="<?php echo base_url('medical/pedia_print/') . $pf->pf_id; ?>" class="glyphicon glyphicon-print viewbtn text-success"></a> <a title="Edit Case" data-toggle="tooltip" href="<?php echo base_url('medical/pedia_edit/') . $pf->pf_id; ?>" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" href="<?php echo base_url('medical/pedia_delete/') . $pf->pf_id . '/' . $list->res_id; ?>" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        echo 'No record(s) to display.';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="clearboth"></div>
                    </div>
                    <!--         /.tab-pane  --> 

                    <!--      PEDIA   TAB END --> 
                    <!--      ADULT   TAB START -->
                    <div class="tab-pane" id="tab_3">
                        <div class="pull-left">
                            <h4>Adult Form</h4>
                            <small>for 10yrs old and above.</small> </div>
                        <div class="pull-right"><a href="<?php echo base_url('medical/adult_add/') . $list->res_id; ?>" class="btn btn-success">Add New</a></div>
                        <div class="clearboth"></div>
                        <div class="col-md-12">
                            <h4>Cases List</h4>
                            <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width="15%">Case No.</th>

                                        <th width="25%">Chief Complaint(s)</th>
                                        <th width="10%">Date/Time</th>
                                        <th width="15%">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th width="15%">Case No.</th>

                                        <th width="25%">Chief Complaint(s)</th>
                                        <th width="10%">Date/Time</th>
                                        <th width="15%">&nbsp;</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    if ($lists_adult) {
                                        foreach ($lists_adult as $af) {
                                            ?>
                                            <tr>
                                                <td><?php echo $af->af_idnumber; ?></td>

                                                <td><?php echo $af->af_complaints; ?></td>
                                                <td><?php echo $af->af_date; ?> (<?php echo $af->af_time; ?>)</td>
                                                <td class="text-right"><a title="Print Case" data-toggle="tooltip"  href="<?php echo base_url('medical/adult_print/') . $af->af_id; ?>" class="glyphicon glyphicon-print viewbtn text-success"></a> <a title="Edit Case" data-toggle="tooltip" href="<?php echo base_url('medical/adult_edit/') . $af->af_id; ?>" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" href="<?php echo base_url('medical/adult_delete/') . $af->af_id . '/' . $list->res_id; ?>" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        echo 'No record(s) to display.';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="clearboth"></div>
                    </div>
                    <!--         /.tab-pane  --> 

                    <!--         ADULT TAB END --> 
                    <!--        PRENATAL TAB START -->
                    <div class="tab-pane" id="tab_4">
                        <div class="pull-left">
                            <h4>Prenatal Form</h4>
                        </div>
                        <div class="pull-right"><a href="<?php echo base_url('medical/prenatal_add/') . $list->res_id; ?>" class="btn btn-success">Add New</a></div>
                        <div class="clearboth"></div>
                        <div class="col-md-12">
                            <h4>Cases List</h4>
                            <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width="15%">Case No.</th>
                                        <th width="25%">Summary.</th>
                                        <th width="10%">Date</th>
                                        <th width="10%">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th width="15%">Case No.</th>
                                        <th width="25%">Summary.</th>
                                        <th width="10%">Date</th>
                                        <th width="10%">&nbsp;</th>
                                    </tr>
                                </tfoot>
                                <tbody>

                                    <?php
                                    if ($lists_prenatal) {
                                        foreach ($lists_prenatal as $pn) {
                                            ?>

                                            <tr>
                                                <td><?php echo $pn->pn_idnumber; ?></td>
                                                <td>Immunization(s): <?php echo $pn->pn_immunization; ?><br>
                                                    Blood Pressure: <?php echo $pn->pn_bp; ?><br>
                                                    Height: <?php echo $pn->pn_height; ?> cm.<br>
                                                    Weight: <?php echo $pn->pn_weight; ?> kgs.<br>
                                                    Fundal Height: <?php echo $pn->pn_fundal_height; ?> cm.
                                                    Fetal Heartbeat: <?php echo $pn->pn_fetal_heartbeat; ?></td>
                                                <td><?php echo $pn->pn_date; ?> (<?php echo $pn->pn_time; ?>)</td>
                                                <td class="text-right"><a title="Print" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url('medical/prenatal_print/') . $pn->pn_id; ?>" class="glyphicon glyphicon-print viewbtn text-info"></a> <a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url('medical/prenatal_edit/') . $pn->pn_id; ?>" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="<?php echo base_url('medical/prenatal_delete/') . $pn->pn_id . '/' . $list->res_id; ?>" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
                                            </tr> <?php
                                        }
                                    } else {
                                        echo 'No record(s) to display.';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="clearboth"></div>
                    </div>
                    <!--         /.tab-pane  --> 

                    <!--         TAB END --> 
                    <!--         REFERRAL TAB START -->
                    <div class="tab-pane" id="tab_5">
                        <div class="pull-left">
                            <h4>Referral Form</h4>
                        </div>
                        <div class="pull-right"><a href="<?php echo base_url('medical/referral_add/') . $list->res_id; ?>" class="btn btn-success">Add New</a></div>
                        <div class="clearboth"></div>
                        <div class="col-md-12">
                            <h4>Cases List</h4>
                            <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width="15%">Case No.</th>
                                        <th width="25%">Summary</th>
                                        <th width="10%">Date</th>
                                        <th width="10%">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th width="15%">Case No.</th>
                                        <th width="25%">Summary</th>
                                        <th width="10%">Date</th>
                                        <th width="10%">&nbsp;</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    if ($lists_referral) {
                                        foreach ($lists_referral as $rf) {
                                            ?>
                                            <tr>
                                                <td><?php echo $rf->rf_idnumber; ?></td>
                                                <td>S: <?php echo $rf->rf_subjective; ?><br>
                                                O: <?php echo $rf->rf_objective; ?><br>
                                                A: <?php echo $rf->rf_assessment; ?><br>
                                                P: <?php echo $rf->rf_plan; ?></td>
                                                <td><?php echo $rf->rf_date; ?> (<?php echo $rf->rf_time; ?>)</td>
                                                <td class="text-right"><a title="Print" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url('medical/referral_print/').$rf->rf_id; ?>" class="glyphicon glyphicon-print viewbtn text-info"></a> <a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url('medical/referral_edit/').$rf->rf_id; ?>" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="<?php echo base_url('medical/referral_delete/').$rf->rf_id . '/' . $list->res_id; ?>" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
                                            </tr>

                                            <?php
                                        }
                                    } else {
                                        echo 'No record(s) to display.';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="clearboth"></div>
                    </div>
                    <!--         /.tab-pane  --> 

                    <!--         REFERRAL TAB END --> 

                </div>
                <!--       /.tab-content  --> 
            </div>
            <!--     nav-tabs-custom  --> 
        </div>
        <?php
    }
} else {
    echo 'No record(s) to display.';
}
?>



<script type="text/javascript">
    var agenow = "<?php echo $ageDiff->format('%y'); ?>";
    var gender = "<?php echo $list->res_gender; ?>";


    // pedia
    if (agenow >= 10) {
        jQuery("#tab_2 .btn").attr("disabled", "disabled").addClass("disabled");
    }
    // pedia END
    // adult
    if (agenow <= 9) {
        jQuery("#tab_3 .btn").attr("disabled", "disabled").addClass("disabled");
    }
    // adult END
    // prenatal
    if (gender === 'Male') {
        jQuery("#tab_4 .btn").attr("disabled", "disabled").addClass("disabled");
        jQuery("#tab_4li").hide();
    } else if (agenow <= 12) {
        jQuery("#tab_4 .btn").attr("disabled", "disabled").addClass("disabled");
        jQuery("#tab_4li").hide();
    }
    // adult END

</script>