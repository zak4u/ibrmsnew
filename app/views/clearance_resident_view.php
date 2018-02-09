<?php
if ($listsres) {
    foreach ($listsres as $res) {
        // for age
        $dateOfBirth = $res->res_dob;
        $dateToday = date("m/d/Y");
        $ageDiff = date_diff(date_create($dateOfBirth), date_create($dateToday));

        // END for age
        ?>

        <div class="row resprofile">
            <div class="col-lg-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Resident Profile  | ID Number: <?php echo $res->res_idnumber; ?> </h3>
                    </div>
                    <!-- left -->
                    <div class="col-lg-12">
                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-md-2">
                                    <div class="res-photo res-sml"><img src="<?php
                                        if (!empty($res->res_photo)) {
                                            echo base_url() . $res->res_photo;
                                        }
                                        ?>" width="100" alt="" /></div>
                                </div>
                                <div class="col-md-5"><?php echo $res->res_firstname . ' ' . $res->res_middlename . ' ' . $res->res_lastname . ' ' . $res->res_extension; ?><br>
                                    <?php echo $res->res_dob; ?> &bull; <?php echo $ageDiff->format('%y'); ?> yrs old<br>

                                </div>
                                <div class="col-md-5">  
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
        <?php
    }
} else {
    echo 'No record(s) to display.';
}
?>




<?php
if ($rescase) {
    foreach ($rescase as $rescase) {
        ?>
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
            jQuery('.btn-clearance').hide();
            $(window).on('load', function () {
                $('#modalAlert').modal('show', {backdrop: 'static'});
            });
        </script>

        <div class="col-lg-12">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                This resident has an existing judicial case! Clearance Issuance has been disabled for this resident. 
                Case ID: <?php echo $rescase->kp07_casenumber; ?>. <a href="<?php echo base_url('/judicial/kp07_view/') . $rescase->kp07_casenumber; ?>">view case</a></div>
        </div>
        <?php
    }
} else {
    ?>


    <div class="row">

        <div class="col-lg-12">
            <div class="box box-solid">
                <div class="box-body">
                    <h4>Resident Clearance Requests</h4>
                    <div class="pull-right"><a href="<?php echo base_url('clearance/add_clearance_resident/') . $res->res_id; ?>" class="btn btn-success btn-clearance">Add New</a></div>
                    <div class="clearboth"></div>
                    <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="10%">Clearance ID No.</th>
                                <th width="20%">Resident Name</th>
                                <th width="20%">Purpose</th>
                                <th width="5%">Date Issued</th>
                                <th width="5%">Valid Until</th>
                                <th width="10%">&nbsp;</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Clearance ID No.</th>
                                <th>Resident Name</th>
                                <th>Purpose</th>
                                <th>Date Issued</th>
                                <th>Valid Until</th>
                                <th>&nbsp;</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            <?php
                            if ($lists) {
                                foreach ($lists as $list) {
                                    ?>



                                    <tr>
                                        <td><?php echo $list->rc_idnumber; ?></td>
                                        <td><?php echo $list->rc_name; ?></td>
                                        <td><?php echo $list->rc_purpose; ?></td>
                                        <td><?php echo $list->rc_issued; ?></td>
                                        <td><?php echo $list->rc_validity; ?></td>
                                        <td class="text-right"><a title="Print Clearance" data-toggle="tooltip"  href="<?php echo base_url('clearance/clearance_resident_print/' . $list->rc_id); ?>" class="glyphicon glyphicon-print viewbtn text-success printpreviewbtn"></a> <a title="Edit Clearance" data-toggle="tooltip" href="<?php echo base_url('clearance/clearance_resident_edit/' . $list->rc_id . '/' . $res->res_id); ?>" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" href="<?php echo base_url('clearance/clearance_resident_delete/' . $list->rc_id . '/' . $res->res_id); ?>" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
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
            </div>
        </div></div>
    <?php
}?>