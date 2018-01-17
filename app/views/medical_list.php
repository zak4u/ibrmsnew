<div class="row">
    <div class="col-lg-4 col-xs-12 position-relative"> 
        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="ResidentSearch" id="ResidentSearch" class="form-control" placeholder="Enter Resident Lastname..." autocomplete="off">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat" disabled="disabled"><i class="fa fa-search"></i> </button>
                </span> </div>
        </form>
        <!-- /.search form -->
        <ul class="dropdown-menu txtresident" style="margin-left:15px;margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownResidentSearch">
        </ul>
    </div>
    <div class="col-lg-4 col-xs-0">&nbsp;</div>
    <div class="col-lg-4 col-xs-12">
        <div class="pull-right"></div>
    </div>
    <div class="clearboth"></div>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="col-lg-12 hide">
        <div class="box box-solid">
            <div class="box-body">
                <h4>Medical Records</h4>
                <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th width="15%">Record ID No.</th>
                            <th width="30%">Resident Name</th>
                            <th width="30%">Chief Complaint(s)</th>
                            <th width="10%">Date</th>
                            <th width="10%">&nbsp;</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th width="15%">Record ID No.</th>
                            <th width="30%">Resident Name</th>
                            <th width="30%">Chief Complaint(s)</th>
                            <th width="10%">Date</th>
                            <th width="10%">&nbsp;</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <?php
                        if ($lists) {
                            foreach ($lists as $list) {
                                ?>


                                <tr>
                                    <td><?php echo $list->itr_idnumber; ?></td>
                                    <td>
                                        <?php
                                        foreach ($listsres as $listsres) {
                                            echo $listsres->res_firstname . ' ' . $listsres->res_middlename . ' ' . $listsres->res_lastname . ' ' . $listsres->res_extension;
                                        }
                                        ?>


                                    </td>
                                    <td><?php echo $list->itr_complaints; ?> (<?php echo $list->itr_consult_mode; ?>)</td>
                                    <td><?php echo $list->itr_date; ?></td>
                                    <td class="text-right"><a title="View" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url('medical/medical_resident_cases/') . $list->res_id; ?>" class="glyphicon glyphicon-eye-open viewbtn text-info"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="<?php echo base_url('medical/medical_resident_cases/') . $list->res_id; ?>" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
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
    </div>
</div>

<script type="text/javascript">
    // resident profile ajax lookup
    $(document).ready(function () {
        $("#ResidentSearch").keyup(function () {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>autocomplete/get_res_val/get_row",
                data: {
                    keyword: $("#ResidentSearch").val()
                },
                dataType: "json",
                success: function (data) {
                    if (data.length > 0) {
                        $('#DropdownResidentSearch').empty();
                        $('#ResidentSearch').attr("data-toggle", "dropdown");
                        $('#DropdownResidentSearch').dropdown('toggle');
                    } else if (data.length == 0) {
                        $('#ResidentSearch').attr("data-toggle", "");
                    }
                    $.each(data, function (key, value) {
                        if (data.length >= 0)
                            $('#DropdownResidentSearch').append('<li role="displayResident" ><a role="menuitem dropdownResidentli" class="dropdownlivalue" id="' + value['res_id'] + '" href="<?php echo base_url('medical/medical_resident_cases/'); ?>">' + value['res_firstname'] + ' ' + value['res_middlename'] + ' ' + value['res_lastname'] + ' ' + value['res_extension'] + ' | ' + value['res_dob'] + '</a></li>');
                    });
                }
            });
        });
        $('ul#DropdownResidentSearch').on('click', 'li a', function () {
            var thisid = $(this).attr("id");
            var theurl = $(this).attr("href");
            window.location = theurl + thisid;

        });
    });
// resident profile ajax lookup END
</script>
