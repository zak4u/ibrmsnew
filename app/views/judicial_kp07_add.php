
<?php $session_data = $this->session->userdata('logged_in'); ?>
<form action="<?php echo base_url('judicial/add_kp07'); ?>" method="post"  name="kp_07_form" class="validate">
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Case Details | Case No.:
                        <input name="CaseIDNum" type="text" class="readonly readonlyfld" readonly value="BCN-<?php echo date('y') . '-' . date('mdHis'); ?>" />
                        | KP Form No.:
                        <input name="FormIDNum" type="text" class="readonly readonlyfld" readonly value="KP07-<?php echo date('y') . '-' . date('mdHis'); ?>" />
                        <input name="Staff" type="hidden" class="readonly readonlyfld" readonly value="<?php echo $session_data['user_firstname'] . ' ' . $session_data['user_lastname']; ?>" />
                    </h3>
                </div>

                <!-- left -->
                <div class="col-lg-6">
                    <div class="box-body">
                        <div class="form-group position-relative">
                            <div class="complainant_fields_wrap ">
                                <label for="Complainant">Complainant <span class="req">*</span></label>
                                <input type="text" name="ComplainantName" id="ComplainantName" class="form-control complainant" autocomplete="off" placeholder="Enter Complainant Name" />
                                <ul class="dropdown-menu txtresident" style="margin-left:15px;margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownComplainantName">
                                </ul>
                                <input type="hidden" class="form-control" name="ComplainantNameID" id="ComplainantNameID"/>
                            </div>
                            <div class="text-right hide"> <a href="#" class="fa fa-plus-circle btn btn-vk add_complainant_button"> add complainant</a></div>
                        </div>
                         
                        <div class="form-group position-relative">
                            <div class="respondent_fields_wrap">
                                <label for="Respondent">Respondent <span class="req">*</span></label>
                                <input type="text" name="RespondentName[]" id="RespondentName" class="form-control respondent"  autocomplete="off" placeholder="Enter Respondent Name" />
                                <ul class="dropdown-menu txtresident" style="margin-left:15px;margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownRespondentName">
                                </ul>
                                <input type="hidden" class="form-control" name="RespondentNameID[]" id="RespondentNameID"/>
                                
                            </div>
                            <div class="text-right hide"> <a href="#" class="fa fa-plus-circle btn btn-vk add_respondent_button"> add respondent</a></div>
                        </div>

                        <!-- /.form-group --> 
                    </div>
                </div>
                <!-- left END --> 

                <!-- right -->

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="Complaint">Complaint Details <span class="req">*</span></label>
                        <textarea name="Complaint" type="text" class="form-control" placeholder="Enter Complaint Details" style="height: 110px;"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Status">Status <span class="req">*</span></label>
                        <input name="Status" type="text" class="readonly readonlyfld" readonly value="On-going" />
                        <div class="clearBoth"></div>
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" value="Add Case" class="btn btn-success" />
                    </div>
                </div>
                <!-- right END -->

                <div class="clearBoth"></div>
            </div>
        </div>
    </div>
</form>



<script type="text/javascript">
// ComplainantName ajax lookup
    $(document).ready(function () {
        $("#ComplainantName").keyup(function () {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>autocomplete/get_res_val/get_row",
                data: {
                    keyword: $("#ComplainantName").val()
                },
                dataType: "json",
                success: function (data) {
                    if (data.length > 0) {
                        $('#DropdownComplainantName').empty();
                        $('#ComplainantName').attr("data-toggle", "dropdown");
                        $('#DropdownComplainantName').dropdown('toggle');
                    } else if (data.length == 0) {
                        $('#ComplainantName').attr("data-toggle", "");
                    }
                    $.each(data, function (key, value) {
                        if (data.length >= 0)
                            $('#DropdownComplainantName').append('<li role="displayResident" ><a role="menuitem dropdownResidentli" class="dropdownlivalue" id="' + value['res_id'] + '"><span>' + value['res_firstname'] + ' ' + value['res_middlename'] + ' ' + value['res_lastname'] + ' ' + value['res_extension'] + '</span> - (' + value['res_dob'] + ')</a></li>');
                    });
                }
            });
        });
        $('ul#DropdownComplainantName').on('click', 'li a', function () {
            $('#ComplainantName').val($(this).find("span").text());
            $('#ComplainantNameID').val($(this).attr("id"));
        });
    });
// ComplainantName ajax lookup END
// ComplainantName ajax lookup
    $(document).ready(function () {
        $("#RespondentName").keyup(function () {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>autocomplete/get_res_val/get_row",
                data: {
                    keyword: $("#RespondentName").val()
                },
                dataType: "json",
                success: function (data) {
                    if (data.length > 0) {
                        $('#DropdownRespondentName').empty();
                        $('#RespondentName').attr("data-toggle", "dropdown");
                        $('#DropdownRespondentName').dropdown('toggle');
                    } else if (data.length == 0) {
                        $('#RespondentName').attr("data-toggle", "");
                    }
                    $.each(data, function (key, value) {
                        if (data.length >= 0)
                            $('#DropdownRespondentName').append('<li role="displayResident" ><a role="menuitem dropdownResidentli" class="dropdownlivalue" id="' + value['res_id'] + '"><span>' + value['res_firstname'] + ' ' + value['res_middlename'] + ' ' + value['res_lastname'] + ' ' + value['res_extension'] + '</span> - (' + value['res_dob'] + ')</a></li>');
                    });
                }
            });
        });
        $('ul#DropdownRespondentName').on('click', 'li a', function () {
            $('#RespondentName').val($(this).find("span").text());
            $('#RespondentNameID').val($(this).attr("id"));
        });
    });
// ComplainantName ajax lookup END
</script>