<?php
	if($lists){
		foreach($lists as $list){

?>

<form  action="<?php echo base_url('residents/edit_resident'); ?>" method="post" name="resident_form" class="validate">
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
                   jQuery(document).ready(function(){
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
                   jQuery(document).ready(function(){
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
                   jQuery(document).ready(function(){
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
                document.getElementById("Bloodtype_sel").value="<?php echo $list->res_bloodtype; ?>";
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
                   jQuery(document).ready(function(){
                        $(".CivilStatus[value='<?php echo $list->res_civil_status; ?>']").iCheck('check');
                   });
                </script>
              <div class="clearBoth"></div>
            </div>
            <div class="subform-group isMarried hideOnload">
              <div class="form-group ">
                <label for="Spouse">Spouse (if married) <span class="req">*</span></label>
                <input name="Spouse" type="text" class="form-control" value="<?php echo $list->res_spouse; ?>" />
              </div>
            </div>
            <div class="form-group">
              <div class="child_fields_wrap">
                <label for="Children">Children</label>
                <input type="text" name="child[]" class="form-control" value="" />
              </div>
              <div class="text-right"> <a href="#" class="fa fa-plus-circle btn btn-vk add_child_button"> add child</a></div>
            </div>
            <div class="form-group">
              <label for="FathersName">Father's Name <span class="req">*</span></label>
              <input name="FathersName" type="text" class="form-control" value="<?php echo $list->res_fathers_name; ?>" />
            </div>
            <div class="form-group">
              <label for="MothersName">Mother's Name <span class="req">*</span></label>
              <input name="MothersName" type="text" class="form-control" value="<?php echo $list->res_mothers_name; ?>" />
            </div>
            <div class="form-group res-photo">
              <div class="col-lg-5">
                <label for="UploadPhoto">Upload Photo</label>
                <input name="UploadPhoto" type="file" id=""/>
              </div>
              <div class="col-lg-1">&nbsp;</div>
              <div class="col-lg-4"><br/>
                or <a href="#" class="btn btn-vk fa fa-camera"> take photo</a></div>
              <div class="clearBoth"></div>
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
                   jQuery(document).ready(function(){
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
              <input name="Purok" type="text" class="form-control" value="<?php echo $list->res_purok; ?>" />
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
              <input name="Household" type="text" class="form-control" value="<?php echo $list->res_household_id; ?>" />
            </div>
            <div class="form-group">
              <label for="FamilySerialNo">Family Serial No. </label>
              <input name="FamilySerialNo" readonly="readonly" type="text" class="form-control"/>
            </div>
            <div class="form-group">
              <div class="neighbors_fields_wrap">
                <label for="Neighbors">Neighbors (at least 2)</label>
                <input type="text" name="neighbor[]" class="form-control" placeholder="Enter Neighbors' Name" />
              </div>
              <div class="text-right"> <a href="#" class="fa fa-plus-circle btn btn-vk add_neighbor_button"> add neighbor</a></div>
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
                   jQuery(document).ready(function(){
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
                   jQuery(document).ready(function(){
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
                   jQuery(document).ready(function(){
                        $(".NHTS[value='<?php echo $list->res_is_dswdnths; ?>']").iCheck('check');
                   });
                </script></div>
              <div class="col-lg-3">
                <label>4Ps Member?</label>
                <br/>
                <input type="checkbox" name="4Ps" class="minimal 4Ps" value="1">
                Yes <script type="text/javascript">
                   jQuery(document).ready(function(){
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
                   jQuery(document).ready(function(){
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
                   jQuery(document).ready(function(){
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
