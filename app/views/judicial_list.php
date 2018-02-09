<div class="row">
    <div class="col-lg-4 col-xs-12 position-relative"> 
        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="ResidentSearch" id="ResidentSearch" class="form-control" placeholder="Enter Resident Name or Case Number..." autocomplete="off">
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
        <div class="pull-right"><a href="<?php echo base_url('judicial/kp07_add'); ?>" class="btn btn-success">Add New Case</a></div>
    </div>
    <div class="clearboth"></div>
    <br/>
    <br/>
    <div class="col-lg-12">
        <div class="box box-solid">
            <div class="box-body">
                <h4>On-going Cases List</h4>
                <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th width="15%">Case No.</th>

                            <th width="20%">Date</th>
                            <th width="50%">Status</th>
                            <th width="20%">&nbsp;</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Case No.</th>

                            <th>Date</th>
                            <th>Status</th>
                            <th>&nbsp;</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <?php
                        if ($lists) {
                            foreach ($lists as $list) {
                                ?>
                                <tr>
                                    <td><?php echo $list->kp07_casenumber; ?></td>

                                    <td><?php echo date("m/d/Y", $list->kp07_created); ?></td>
                                    <td><?php echo $list->kp07_status; ?></td>
                                    <td class="text-right"><a title="View" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url('judicial/kp07_view/') . $list->kp07_casenumber; ?>" class="glyphicon glyphicon-eye-open viewbtn text-info"></a> <a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url('judicial/kp07_edit/') . $list->kp07_casenumber; ?>" class="glyphicon glyphicon-pencil editbtn text-green hide"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
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
                url: "<?php echo base_url(); ?>autocomplete/get_jcase/get_row_jcase",
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
                            $('#DropdownResidentSearch').append('<li role="displayResident" ><a role="menuitem dropdownResidentli" class="dropdownlivalue" id="' + value['kp07_casenumber'] + '" href="<?php echo base_url('judicial/kp07_view/'); ?>">' + value['res_name'] + ' | ' + value['kp07_casenumber'] + ' - ' + value['res_type'] + '</a></li>');
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