<?php
if ($lists) {
    foreach ($lists as $list) {
        ?>

        <form  action="<?php echo base_url('residents/edit_resident'); ?>" method="post" name="resident_form"  enctype="multipart/form-data" class="validate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="col-lg-6">
                                <h3 class="box-title">Personal Details | Resident ID No.:
                                    <input name="res_id_num" type="text" class="readonly readonlyfld" readonly value="<?php echo $list->res_idnumber; ?>" />
                                </h3>
                            </div>
                            <div class="col-lg-6 text-right">
                                <input type="submit" value="Edit Resident" class="btn btn-success" />
                            </div>
                            <div class="clearBoth"></div>
                        </div>

                        <!-- left -->
                        <div class="col-lg-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="FirstName">First Name <span class="req">*</span></label>
                                    <input type="text" name="FirstName" class="form-control" value="<?php echo $list->res_firstname; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="MiddleName">Middle Name <span class="req">*</span></label>
                                    <input type="text" name="MiddleName" class="form-control" value="<?php echo $list->res_middlename; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="LastName">Last Name <span class="req">*</span></label>
                                    <input type="text" name="LastName" class="form-control" value="<?php echo $list->res_lastname; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="Extension">Extension</label>
                                    <input name="Extension" type="text" class="form-control" value="<?php echo $list->res_extension; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="DOB">Date of Birth <span class="req">*</span></label>
                                    <input type="text" name="DOB" class="form-control"  data-inputmask="'alias': 'mm/dd/yyyy'" data-mask value="<?php echo $list->res_dob; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="POB">Place of Birth <span class="req">*</span></label>
                                    <input type="text" name="POB" class="form-control" value="<?php echo $list->res_pob; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="Nationality">Nationality (Filipino, Australian, etc)<span class="req">*</span></label>
                                    <input type="text" name="Nationality" class="form-control" value="<?php echo $list->res_nationality; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="Religion">Religion <span class="req">*</span></label>
                                    <input type="text" name="Religion" class="form-control" value="<?php echo $list->res_religion; ?>" />
                                </div>

                                <!-- /.form-group --> 
                            </div>
                        </div>
                        <!-- left END --> 

                        <!-- right -->

                        <div class="col-lg-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="col-lg-5 no-pad-left">
                                        <label>Gender <span class="req">*</span></label>
                                        <br/>
                                        <input type="radio" name="gender" class="minimal gender" value="Male">
                                        Male &nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="gender" class="minimal gender" value="Female">
                                        Female 
                                        <script type="text/javascript">
                                            jQuery(document).ready(function () {
                                                $(".gender[value='<?php echo $list->res_gender; ?>']").iCheck('check');
                                            });
                                        </script> 
                                    </div>
                                    <div class="col-lg-3">
                                        <label>PWD?</label>
                                        <br/>
                                        <input type="checkbox" name="pwd" class="minimal pwd" value="1">
                                        Yes 
                                        <script type="text/javascript">
                                            jQuery(document).ready(function () {
                                                $(".pwd[value='<?php echo $list->res_is_pwd; ?>']").iCheck('check');
                                            });
                                        </script> 
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Deceased?</label>
                                        <br/>
                                        <input type="checkbox" name="deceased" class="minimal deceased" value="1">
                                        Yes 
                                        <script type="text/javascript">
                                            jQuery(document).ready(function () {
                                                $(".deceased[value='<?php echo $list->res_is_deceased; ?>']").iCheck('check');
                                            });
                                        </script></div>
                                    <div class="clearBoth"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-5 no-pad-left">
                                        <label for="Bloodtype">Bloodtype <span class="req">*</span></label>
                                        <select name="Bloodtype" class="form-control select2" id="Bloodtype_sel"  data-placeholder="Please Select Bloodtype" style="width: 100%;">
                                            <option value="" selected="selected">Please Select Bloodtype</option>
                                            <option value="A+">A+</option>
                                            <option value="AB+">AB+</option>
                                            <option value="B+">B+</option>
                                            <option value="O+">O+</option>
                                        </select>
                                        <script type="text/javascript">
                                            document.getElementById("Bloodtype_sel").value = "<?php echo $list->res_bloodtype; ?>";
                                        </script> 
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="Height">Height (cm)</label>
                                        <input name="Height" type="text" class="form-control" value="<?php echo $list->res_height; ?>" />
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="Weight">Weight (kgs.)</label>
                                        <input name="Weight" type="text" class="form-control" value="<?php echo $list->res_weight; ?>" />
                                    </div>
                                    <div class="clearBoth"></div>
                                </div>
                                <div class="form-group">
                                    <label>Civil Status <span class="req">*</span></label>
                                    <br/>
                                    <div class="col-lg-4">
                                        <input type="radio" name="CivilStatus" class="minimal CivilStatus" value="Single">
                                        Single<br>
                                        <input type="radio" name="CivilStatus" class="minimal CivilStatus" value="Separated">
                                        Separated</div>
                                    <div class="col-lg-4">
                                        <input type="radio" name="CivilStatus" class="minimal CivilStatus" value="Married">
                                        Married<br>
                                        <input type="radio" name="CivilStatus" class="minimal CivilStatus" value="Annulled">
                                        Annulled</div>
                                    <div class="col-lg-4">
                                        <input type="radio" name="CivilStatus" class="minimal CivilStatus" value="Co-habitation">
                                        Co-habitation<br>
                                        <input type="radio" name="CivilStatus" class="minimal CivilStatus" value="Widow or Widower">
                                        Widow/Widower</div>
                                    <script type="text/javascript">
                                        jQuery(document).ready(function () {
                                            $(".CivilStatus[value='<?php echo $list->res_civil_status; ?>']").iCheck('check');
                                        });
                                    </script>
                                    <div class="clearBoth"></div>
                                </div>
                                <div class="subform-group isMarried hideOnload">
                                    <div class="form-group position-relative">
                                        <label for="Spouse">Spouse (if married)</label>
                                        <input name="SpouseName" id="SpouseName" type="text" class="form-control" value="<?php echo $list->res_spouse; ?>" />
                                        <ul class="dropdown-menu txtresident" style="margin-left:15px;margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownSpouseName">
                                        </ul>
                                        <input type="hidden" class="form-control" name="SpouseNameID" id="SpouseNameID">
                                    </div>
                                </div>
                                <div class="form-group hide">
                                    <div class="child_fields_wrap">
                                        <label for="Children">Children</label>
                                        <input type="text" name="child[]" class="form-control" value="" />
                                    </div>
                                    <div class="text-right"> <a href="#" class="fa fa-plus-circle btn btn-vk add_child_button"> add child</a></div>
                                </div>
                                <div class="form-group position-relative">
                                    <label for="FathersName">Father's Name </label>
                                    <input name="FathersName" id="FathersName" type="text" class="form-control"  value="<?php echo $list->res_fathers_name; ?>" autocomplete="off" />
                                    <ul class="dropdown-menu txtresident" style="margin-left:15px;margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownFathersName">
                                    </ul>
                                    <input type="hidden" class="form-control" name="FathersNameID" id="FathersNameID">
                                </div>
                                <div class="form-group position-relative">
                                    <label for="MothersName">Mother's Name </label>
                                    <input name="MothersName" id="MothersName" type="text" class="form-control" value="<?php echo $list->res_mothers_name; ?>" autocomplete="off" />
                                    <ul class="dropdown-menu txtresident" style="margin-left:15px;margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownMothersName">
                                    </ul>
                                    <input type="hidden" class="form-control" name="MothersNameID" id="MothersNameID">
                                </div>
                                <div class="form-group res-photo">

                                    <label for="UploadPhoto">Resident Photo</label>


                                    <div class="res-photo res-large"><img height="120" src="<?php
                                        if (!empty($list->res_photo)) {
                                            echo base_url() . $list->res_photo;
                                        }
                                        ?>" alt="" /><br><a href="#" data-toggle="modal" data-target="#modal-default">(update?)</a>




                                    </div>
                                </div>

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
                                <div class="form-group">
                                    <label>Home Ownership <span class="req">*</span></label>
                                    <br/>
                                    <input type="radio" name="HomeOwnership" class="minimal HomeOwnership" value="Owned">
                                    Owned &nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="HomeOwnership" class="minimal HomeOwnership" value="Mortgaged">
                                    Mortgaged &nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="HomeOwnership" class="minimal HomeOwnership" value="Rented">
                                    Rented &nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="HomeOwnership" class="minimal HomeOwnership" value="Living with parents">
                                    Living with parents &nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="HomeOwnership" class="minimal HomeOwnership" value="Other">
                                    Other 
                                    <script type="text/javascript">
                                        jQuery(document).ready(function () {
                                            $(".HomeOwnership[value='<?php echo $list->res_home_ownership; ?>']").iCheck('check');
                                        });
                                    </script> 
                                </div>
                                <div class="clearBoth"></div>
                                <div class="form-group">
                                    <label for="Address">House No./Block/Lot</label>
                                    <input name="Address" type="text" class="form-control" value="<?php echo $list->res_house_number; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="Street">Street</label>
                                    <input name="Street" type="text" class="form-control" value="<?php echo $list->res_street; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="Purok">Purok <span class="req">*</span></label>
                                    <select name="Purok" class="form-control select2" id="Purok_sel"  data-placeholder="Please Select Purok" style="width: 100%;">
                                        <option value="" selected="selected">Please Select Gender</option>
                                        <?php
                                        foreach ($listpurok as $purok) {
                                            ?>
                                            <option value="<?php echo $purok->purok_id; ?>"><?php echo $purok->purok_name; ?></option>
                                        <?php } ?>
                                    </select>
                                    <script type="text/javascript">
                                        document.getElementById("Purok_sel").value = "<?php echo $list->res_purok; ?>";
                                    </script> 
                                </div>
                                <div class="form-group">
                                    <label for="Barangay">Barangay <span class="req">*</span></label>
                                    <input name="Barangay" type="text" class="form-control" readonly="readonly" value="<?php echo $list->res_barangay; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="City">City <span class="req">*</span></label>
                                    <input name="City" type="text" class="form-control" readonly="readonly" value="<?php echo $list->res_city; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="Province">Province <span class="req">*</span></label>
                                    <input name="Province" type="text" class="form-control" readonly="readonly" value="<?php echo $list->res_province; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="Region">Region <span class="req">*</span></label>
                                    <input name="Region" type="text" class="form-control" readonly="readonly" value="<?php echo $list->res_region; ?>" />
                                </div>

                                <!-- /.form-group --> 
                            </div>
                        </div>
                        <!-- left END --> 

                        <!-- right -->
                        <div class="col-lg-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="Household">Household ID No. </label>
                                    <select name="Household" id="Household_sel" class="form-control select2"  data-placeholder="Please Select Household" style="width: 100%;">
                                        <option value=" " selected="selected">Please Select Household</option>
                                        <?php
                                        foreach ($listhh as $hh) {
                                            ?>
                                            <option value="<?php echo $hh->hh_idnumber; ?>" class="<?php echo $hh->hh_family_serial; ?>"><?php echo $hh->hh_idnumber; ?></option>
                                        <?php } ?>
                                    </select>
                                    <script type="text/javascript">
                                        $('#Household_sel').on('select2:select', function (e) {
                                            hhselval = $(this).find(":selected").attr("class");
                                            $("#FamilySerialNo").val(hhselval);
                                        });

                                        document.getElementById("Household_sel").value = "<?php echo $list->res_household_id; ?>";
                                    </script> 
                                </div>
                                <div class="form-group hide">
                                    <label for="FamilySerialNo">Family Serial No. </label>
                                    <input name="FamilySerialNo" id="FamilySerialNo" readonly="readonly" type="text" class="form-control" value = "<?php echo $list->res_household_id; ?>"/>
                                </div>
                                <div class="form-group position-relative">
                                    <div class="neighbors_fields_wrap">
                                        <label for="Neighbors">Neighbor (for reference)</label>
                                        <input type="text" id="NeighborName" name="neighbor" autocomplete="off" value="<?php echo $list->res_neighbors; ?>" class="form-control" placeholder="Enter Neighbor's Name" />

                                        <ul class="dropdown-menu txtresident" style="margin-left:15px;margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownNeighborName">
                                        </ul>
                                        <input type="hidden" class="form-control" name="NeighborNameID" id="NeighborNameID">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="ContactNumber">Contact Number</label>
                                    <input name="ContactNumber" type="text" class="form-control" value="<?php echo $list->res_contact_number; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input name="Email" type="text" class="form-control" value="<?php echo $list->res_email; ?>" />
                                </div>

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
                                <div class="form-group">
                                    <label>Educational Attainment </label>
                                    <br>
                                    <div class="col-lg-3 no-pad-left">
                                        <input type="radio" name="EducationalAttainment" class="minimal EducationalAttainment" value="Elementary">
                                        Elementary<br>
                                        <input type="radio" name="EducationalAttainment" class="minimal EducationalAttainment" value="High School">
                                        High School</div>
                                    <div class="col-lg-4">
                                        <input type="radio" name="EducationalAttainment" class="minimal EducationalAttainment" value="College">
                                        College<br>
                                        <input type="radio" name="EducationalAttainment" class="minimal EducationalAttainment" value="Post-graduate">
                                        Post-graduate</div>
                                    <div class="col-lg-5">
                                        <input type="radio" name="EducationalAttainment" class="minimal EducationalAttainment" value="Vocational">
                                        Vocational<br>
                                        <input type="radio" name="EducationalAttainment" class="minimal EducationalAttainment" value="No Formal Eductaion">
                                        No Formal Eductaion</div>
                                    <script type="text/javascript">
                                        jQuery(document).ready(function () {
                                            $(".EducationalAttainment[value='<?php echo $list->res_education; ?>']").iCheck('check');
                                        });
                                    </script>
                                    <div class="clearBoth"></div>
                                </div>
                                <div class="clearBoth"></div>
                                <div class="form-group">
                                    <label>Employment Status</label>
                                    <br>
                                    <div class="col-lg-3 no-pad-left">
                                        <input type="radio" name="EmploymentStatus" class="minimal EmploymentStatus" value="Student">
                                        Student<br>
                                        <input type="radio" name="EmploymentStatus" class="minimal EmploymentStatus" value="Employed">
                                        Employed</div>
                                    <div class="col-lg-4">
                                        <input type="radio" name="EmploymentStatus" class="minimal EmploymentStatus" value="Retired">
                                        Retired<br>
                                        <input type="radio" name="EmploymentStatus" class="minimal EmploymentStatus" value="Unknown">
                                        Unknown</div>
                                    <div class="col-lg-5">
                                        <input type="radio" name="EmploymentStatus" class="minimal EmploymentStatus" value="Un-employed">
                                        Un-employed<br>
                                    </div>
                                    <script type="text/javascript">
                                        jQuery(document).ready(function () {
                                            $(".EmploymentStatus[value='<?php echo $list->res_employment_status; ?>']").iCheck('check');
                                        });
                                    </script>
                                    <div class="clearBoth"></div>
                                </div>
                                <div class="clearBoth"></div>
                                <div class="form-group">
                                    <div class="col-lg-3 no-pad-left">
                                        <label>DSWD NHTS?</label>
                                        <br/>
                                        <input type="checkbox" name="NHTS" class="minimal NHTS" value="1">
                                        Yes 
                                        <script type="text/javascript">
                                            jQuery(document).ready(function () {
                                                $(".NHTS[value='<?php echo $list->res_is_dswdnths; ?>']").iCheck('check');
                                            });
                                        </script></div>
                                    <div class="col-lg-3">
                                        <label>4Ps Member?</label>
                                        <br/>
                                        <input type="checkbox" name="4Ps" class="minimal 4Ps" value="1">
                                        Yes <script type="text/javascript">
                                            jQuery(document).ready(function () {
                                                $(".4Ps[value='<?php echo $list->res_is_4ps; ?>']").iCheck('check');
                                            });
                                        </script> </div>
                                    <div class="clearBoth"></div>
                                </div>

                                <!-- /.form-group --> 
                            </div>
                        </div>
                        <!-- left END --> 

                        <!-- right -->
                        <div class="col-lg-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="PhilHealth">PhilHealth No.</label>
                                    <input name="PhilHealth" type="text" class="form-control" value="<?php echo $list->res_philhealth_id; ?>" />
                                </div>
                                <div class="form-group">
                                    <label>PhilHealth Category</label>
                                    <br>
                                    <input type="radio" name="PhilHealthCategory" class="minimal PhilHealthCategory" value="FE-Private">
                                    FE-Private &nbsp;
                                    <input type="radio" name="PhilHealthCategory" class="minimal PhilHealthCategory" value="FE-Government">
                                    FE-Government &nbsp;
                                    <input type="radio" name="PhilHealthCategory" class="minimal PhilHealthCategory" value="IE">
                                    IE &nbsp;
                                    <input type="radio" name="PhilHealthCategory" class="minimal PhilHealthCategory" value="Other">
                                    Other 
                                    <script type="text/javascript">
                                        jQuery(document).ready(function () {
                                            $(".PhilHealthCategory[value='<?php echo $list->res_philhealth_category; ?>']").iCheck('check');
                                        });
                                    </script></div>
                                <div class="clearBoth"></div>
                                <div class="form-group">
                                    <label>Primary Care Benefit (PCB) Member?</label>
                                    <br/>
                                    <input type="checkbox" name="pcb" class="minimal pcb" value="1">
                                    Yes 
                                    <script type="text/javascript">
                                        jQuery(document).ready(function () {
                                            $(".pcb[value='<?php echo $list->res_is_pcb; ?>']").iCheck('check');
                                        });
                                    </script></div>
                                <div class="form-group text-right">
                                    <input type="hidden" name="res_id" value="<?php echo $list->res_id; ?>" />
                                    <input type="submit" value="Edit Resident" class="btn btn-success" />
                                </div>
                                <!-- /.form-group --> 
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
<script type="text/javascript">
// father ajax lookup
    $(document).ready(function () {
        $("#FathersName").keyup(function () {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>autocomplete/get_res_val/get_row",
                data: {
                    keyword: $("#FathersName").val()
                },
                dataType: "json",
                success: function (data) {
                    if (data.length > 0) {
                        $('#DropdownFathersName').empty();
                        $('#FathersName').attr("data-toggle", "dropdown");
                        $('#DropdownFathersName').dropdown('toggle');
                    } else if (data.length == 0) {
                        $('#FathersName').attr("data-toggle", "");
                    }
                    $.each(data, function (key, value) {
                        if (data.length >= 0)
                            $('#DropdownFathersName').append('<li role="displayResident" ><a role="menuitem dropdownResidentli" class="dropdownlivalue" id="' + value['res_id'] + '"><span>' + value['res_firstname'] + ' ' + value['res_middlename'] + ' ' + value['res_lastname'] + ' ' + value['res_extension'] + '</span> - (' + value['res_dob'] + ')</a></li>');
                    });
                }
            });
        });
        $('ul#DropdownFathersName').on('click', 'li a', function () {
            $('#FathersName').val($(this).find("span").text());
            $('#FathersNameID').val($(this).attr("id"));
        });
    });
// father ajax lookup END
// mother ajax lookup
    $(document).ready(function () {
        $("#MothersName").keyup(function () {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>autocomplete/get_res_val/get_row",
                data: {
                    keyword: $("#MothersName").val()
                },
                dataType: "json",
                success: function (data) {
                    if (data.length > 0) {
                        $('#DropdownMothersName').empty();
                        $('#MothersName').attr("data-toggle", "dropdown");
                        $('#DropdownMothersName').dropdown('toggle');
                    } else if (data.length == 0) {
                        $('#MothersName').attr("data-toggle", "");
                    }
                    $.each(data, function (key, value) {
                        if (data.length >= 0)
                            $('#DropdownMothersName').append('<li role="displayResident" ><a role="menuitem dropdownResidentli" class="dropdownlivalue" id="' + value['res_id'] + '"><span>' + value['res_firstname'] + ' ' + value['res_middlename'] + ' ' + value['res_lastname'] + ' ' + value['res_extension'] + '</span> - (' + value['res_dob'] + ')</a></li>');
                    });
                }
            });
        });
        $('ul#DropdownMothersName').on('click', 'li a', function () {
            $('#MothersName').val($(this).find("span").text());
            $('#MothersNameID').val($(this).attr("id"));
        });
    });
// mother ajax lookup END
// spouse ajax lookup
    $(document).ready(function () {
        $("#SpouseName").keyup(function () {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>autocomplete/get_res_val/get_row",
                data: {
                    keyword: $("#SpouseName").val()
                },
                dataType: "json",
                success: function (data) {
                    if (data.length > 0) {
                        $('#DropdownSpouseName').empty();
                        $('#SpouseName').attr("data-toggle", "dropdown");
                        $('#DropdownSpouseName').dropdown('toggle');
                    } else if (data.length == 0) {
                        $('#SpouseName').attr("data-toggle", "");
                    }
                    $.each(data, function (key, value) {
                        if (data.length >= 0)
                            $('#DropdownSpouseName').append('<li role="displayResident" ><a role="menuitem dropdownResidentli" class="dropdownlivalue" id="' + value['res_id'] + '"><span>' + value['res_firstname'] + ' ' + value['res_middlename'] + ' ' + value['res_lastname'] + ' ' + value['res_extension'] + '</span> - (' + value['res_dob'] + ')</a></li>');
                    });
                }
            });
        });
        $('ul#DropdownSpouseName').on('click', 'li a', function () {
            $('#SpouseName').val($(this).find("span").text());
            $('#SpouseNameID').val($(this).attr("id"));
        });
    });
// spouse ajax lookup END


// NeighborName ajax lookup
    $(document).ready(function () {
        $("#NeighborName").keyup(function () {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>autocomplete/get_res_val/get_row",
                data: {
                    keyword: $("#NeighborName").val()
                },
                dataType: "json",
                success: function (data) {
                    if (data.length > 0) {
                        $('#DropdownNeighborName').empty();
                        $('#NeighborName').attr("data-toggle", "dropdown");
                        $('#DropdownNeighborName').dropdown('toggle');
                    } else if (data.length == 0) {
                        $('#NeighborName').attr("data-toggle", "");
                    }
                    $.each(data, function (key, value) {
                        if (data.length >= 0)
                            $('#DropdownNeighborName').append('<li role="displayResident" ><a role="menuitem dropdownResidentli" class="dropdownlivalue" id="' + value['res_id'] + '"><span>' + value['res_firstname'] + ' ' + value['res_middlename'] + ' ' + value['res_lastname'] + ' ' + value['res_extension'] + '</span> - (' + value['res_dob'] + ')</a></li>');
                    });
                }
            });
        });
        $('ul#DropdownNeighborName').on('click', 'li a', function () {
            $('#NeighborName').val($(this).find("span").text());
            $('#NeighborNameID').val($(this).attr("id"));
        });
    });
// NeighborName ajax lookup END

</script>





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
                <div class="col-lg-8"><form  action="<?php echo base_url('residents/edit_resident_photo/') . $list->res_id; ?>" method="post" name="resident_form"  enctype="multipart/form-data" class="validate"><small>(max size: 3mb)</small> <input name="UploadPhoto" type="file" id="" class="imgfile" /><br/><input type="submit" value="Update Photo" class="btn btn-success" /></form></div>
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