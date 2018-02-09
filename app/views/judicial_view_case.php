<?php
if ($kp07s) {
    foreach ($kp07s as $kp07) {
        ?>
        <div class="row resprofile">
            <div class="col-lg-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Case Details | Case No.: <strong><?php echo $kp07->kp07_casenumber; ?></strong></h3>
                        <div class="casestatus casestatus-<?php echo $kp07->kp07_status; ?> pull-right"><?php echo $kp07->kp07_status; ?></div><div class="clearboth"></div>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-5">
                            <h4>Persons Involved:</h4>
                            <?php
                            if ($listscaseinvolved) {
                                foreach ($listscaseinvolved as $inv) {
                                    echo $inv->res_name . ' [' . $inv->res_type . ']<br/>';
                                }
                            }
                            ?>  
                            <div class="clearboth"></div>
                        </div>

                        <div class="col-lg-7"> <h4>Complaint:</h4>
                            <?php echo $kp07->kp07_complaint; ?><br class="clearboth"/><br class="clearboth"/></div><div class="clearboth"></div>
                        <div class="clearboth"></div>

                    </div><div class="clearboth"></div>

                    <br/>

                </div><div class="clearboth"></div>
            </div> 
        </div>






        <div class="row">

            <div class="col-md-12"> 
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">KP07</a></li>
                        <li><a href="#tab_2" data-toggle="tab">KP08</a></li>
                        <li><a href="#tab_3" data-toggle="tab">KP09</a></li>

                    </ul>
                    <div class="tab-content"> 

                        <!-- TAB START -->
                        <div class="tab-pane active" id="tab_1">
                            <div class="pull-left">
                                <h4>Complaint</h4>
                            </div>
                            <div class="pull-right"></div>
                            <div class="clearboth"></div>
                            <div class="col-md-12">

                                <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="15%">Case No.</th>

                                            <th width="10%">Date</th>
                                            <th width="10%">Status</th>
                                            <th width="20%">Added by</th>
                                            <th width="10%">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Case No.</th>

                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Added by</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>




                                        <tr>
                                            <td><?php echo $kp07->kp07_casenumber; ?></td>

                                            <td><?php echo date("m/d/Y", $kp07->kp07_created); ?></td>
                                            <td><?php echo $kp07->kp07_status; ?></td>
                                            <td><?php echo $kp07->kp07_addedby; ?></td>
                                            <td class="text-right"><a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url('judicial/kp07_edit/') . $kp07->kp07_casenumber; ?>" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="<?php echo base_url('judicial/kp07_delete/').$kp07->kp07_casenumber; ?>" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="clearboth"></div>
                        </div>
                        <!-- /.tab-pane --> 

                        <!-- TAB END -->
                        <!-- TAB START -->
                        <div class="tab-pane" id="tab_2">
                            <div class="pull-left">
                                <h4>Notice of Hearing</h4>
                            </div>
                            <div class="pull-right"><a href="<?php echo base_url(); ?>judicial/kp08add" class="btn btn-success">Add New</a></div>
                            <div class="clearboth"></div>
                            <div class="col-md-12">

                                <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="15%">Case No.</th>
                                            <th width="40%">Parties Involved</th>
                                            <th width="20%">Added By</th>
                                            <th width="5%">Date</th>
                                            <th width="20%">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Case No.</th>
                                            <th>Parties Involved</th>
                                            <th>Added By</th>
                                            <th>Date</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>KP08-17-1234571</td>
                                            <td>de la Cruz, Mondragon, etc</td>
                                            <td>Juan</td>
                                            <td>12/31/2014</td>
                                            <td class="text-right"><a title="Print" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url(); ?>judicial/kp08print" class="glyphicon glyphicon-print viewbtn text-info"></a> <a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url(); ?>judicial/kp08edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
                                        </tr>
                                        <tr>
                                            <td>KP08-17-1234571</td>
                                            <td>de la Cruz</td>
                                            <td>Juana</td>
                                            <td>12/31/2014</td>
                                            <td class="text-right"><a title="Print" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url(); ?>judicial/kp08print" class="glyphicon glyphicon-print viewbtn text-info"></a> <a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url(); ?>judicial/kp08edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
                                        </tr>
                                        <tr>
                                            <td>KP08-17-1234571</td>
                                            <td>Mondragon</td>
                                            <td>Felix III</td>
                                            <td>12/31/2014</td>
                                            <td class="text-right"><a title="Print" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url(); ?>judicial/kp08print" class="glyphicon glyphicon-print viewbtn text-info"></a> <a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url(); ?>judicial/kp08edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
                                        </tr>
                                        <tr>
                                            <td>KP08-17-1234571</td>
                                            <td>de la Cruz</td>
                                            <td>Juan</td>
                                            <td>12/31/2014</td>
                                            <td class="text-right"><a title="Print" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url(); ?>judicial/kp08print" class="glyphicon glyphicon-print viewbtn text-info"></a> <a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url(); ?>judicial/kp08edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
                                        </tr>
                                        <tr>
                                            <td>KP08-17-1234571</td>
                                            <td>de la Cruz</td>
                                            <td>Juan</td>
                                            <td>12/31/2014</td>
                                            <td class="text-right"><a title="Print" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url(); ?>judicial/kp08print" class="glyphicon glyphicon-print viewbtn text-info"></a> <a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url(); ?>judicial/kp08edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="clearboth"></div>
                        </div>
                        <!-- /.tab-pane --> 

                        <!-- TAB END -->
                        <!-- TAB START -->
                        <div class="tab-pane" id="tab_3">
                            <div class="pull-left">
                                <h4>Summons</h4>
                            </div>
                            <div class="pull-right"><a href="<?php echo base_url(); ?>judicial/kp09add" class="btn btn-success">Add New</a></div>
                            <div class="clearboth"></div>
                            <div class="col-md-12">

                                <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="15%">Case No.</th>
                                            <th width="40%">Parties Involved</th>
                                            <th width="20%">Added By</th>
                                            <th width="5%">Date</th>
                                            <th width="20%">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Case No.</th>
                                            <th>Parties Involved</th>
                                            <th>Added By</th>
                                            <th>Date</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>KP09-17-1234571</td>
                                            <td>de la Cruz, Mondragon, etc</td>
                                            <td>Juan</td>
                                            <td>12/31/2014</td>
                                            <td class="text-right"><a title="Print" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url(); ?>judicial/kp09print" class="glyphicon glyphicon-print viewbtn text-info"></a> <a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url(); ?>judicial/kp09edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
                                        </tr>
                                        <tr>
                                            <td>KP09-17-1234571</td>
                                            <td>de la Cruz</td>
                                            <td>Juana</td>
                                            <td>12/31/2014</td>
                                            <td class="text-right"><a title="Print" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url(); ?>judicial/kp09print" class="glyphicon glyphicon-print viewbtn text-info"></a> <a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url(); ?>judicial/kp09edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
                                        </tr>
                                        <tr>
                                            <td>KP09-17-1234571</td>
                                            <td>Mondragon</td>
                                            <td>Felix III</td>
                                            <td>12/31/2014</td>
                                            <td class="text-right"><a title="Print" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url(); ?>judicial/kp09print" class="glyphicon glyphicon-print viewbtn text-info"></a> <a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url(); ?>judicial/kp09edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
                                        </tr>
                                        <tr>
                                            <td>KP09-17-1234571</td>
                                            <td>de la Cruz</td>
                                            <td>Juan</td>
                                            <td>12/31/2014</td>
                                            <td class="text-right"><a title="Print" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url(); ?>judicial/kp09print" class="glyphicon glyphicon-print viewbtn text-info"></a> <a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url(); ?>judicial/kp09edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
                                        </tr>
                                        <tr>
                                            <td>KP09-17-1234571</td>
                                            <td>de la Cruz</td>
                                            <td>Juan</td>
                                            <td>12/31/2014</td>
                                            <td class="text-right"><a title="Print" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url(); ?>judicial/kp09print" class="glyphicon glyphicon-print viewbtn text-info"></a> <a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url(); ?>judicial/kp09edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="clearboth"></div>
                        </div>
                        <!-- /.tab-pane --> 

                        <!-- TAB END -->

                    </div>
                    <!-- /.tab-content --> 
                </div>
                <!-- nav-tabs-custom --> 
            </div>

        </div>

        <?php
    }
} else {
    echo 'No record(s) to display.';
}
?>