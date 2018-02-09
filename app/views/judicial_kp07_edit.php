
<?php
if ($listscase) {
    foreach ($listscase as $list) {
        ?>
        <?php
        if ($listscaseC) {
            foreach ($listscaseC as $caseC) {
                
            }
        }
        if ($listscaseR) {
            foreach ($listscaseR as $caseR) {
                
            }
        }
        ?>  
        <?php $session_data = $this->session->userdata('logged_in'); ?>
        <form action="<?php echo base_url('judicial/edit_kp07/' . $list->kp07_casenumber); ?>" method="post"  name="kp_07_form" class="validate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Case Details | Case No.:
                                <input name="CaseIDNum" type="text" class="readonly readonlyfld" readonly value="<?php echo $list->kp07_casenumber; ?>" />
                                | KP Form No.:
                                <input name="FormIDNum" type="text" class="readonly readonlyfld" readonly value="<?php echo $list->kp07_idnumber; ?>" />
                                <input name="Staff" type="hidden" class="readonly readonlyfld" readonly value="<?php echo $session_data['user_firstname'] . ' ' . $session_data['user_lastname']; ?>" />
                            </h3>
                        </div>

                        <!-- left -->
                        <div class="col-lg-6">
                            <div class="box-body">
                                <div class="form-group position-relative">
                                    <div class="complainant_fields_wrap ">
                                        <label for="Complainant">Complainant <span class="req">*</span></label>
                                        <input type="text" name="ComplainantName" id="ComplainantName" class="form-control complainant" autocomplete="off" placeholder="Enter Complainant Name" value="<?php echo $caseC->res_name; ?>" readonly="readonly" />
                                        <ul class="dropdown-menu txtresident" style="margin-left:15px;margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownComplainantName">
                                        </ul>
                                        <input type="hidden" class="form-control" name="ComplainantNameID" id="ComplainantNameID"/>
                                    </div>
                                    <div class="text-right hide"> <a href="#" class="fa fa-plus-circle btn btn-vk add_complainant_button"> add complainant</a></div>
                                </div>

                                <div class="form-group position-relative">
                                    <div class="respondent_fields_wrap">
                                        <label for="Respondent">Respondent <span class="req">*</span></label>
                                        <input type="text" name="RespondentName" id="RespondentName" class="form-control respondent"  autocomplete="off" placeholder="Enter Respondent Name" value="<?php echo $caseR->res_name; ?>" readonly="readonly" />
                                        <ul class="dropdown-menu txtresident" style="margin-left:15px;margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownRespondentName">
                                        </ul>
                                        <input type="hidden" class="form-control" name="RespondentNameID" id="RespondentNameID"/>

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
                                <textarea name="Complaint" type="text" class="form-control" placeholder="Enter Complaint Details" style="height: 160px;"><?php echo $list->kp07_complaint; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="Status">Status <span class="req">*</span></label>
                                <select name="Status" class="form-control select2" id="Status_sel"  data-placeholder="Please Select Status" style="width: 100%;">
                                    <option value="" selected="selected">Please Select Status</option>
                                    <option value="On-going">On-going</option>
                                    <option value="Resolved">Resolved</option>
                                    <option value="Dismissed">Dismissed</option>

                                </select>
                                <script type="text/javascript">
                                    document.getElementById("Status_sel").value = "<?php echo $list->kp07_status; ?>";
                                </script> 



                                <div class="clearBoth"></div>
                            </div>
                            <div class="form-group text-right">
                                <input type="submit" value="Edit Case" class="btn btn-success" />
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
