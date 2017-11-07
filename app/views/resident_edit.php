<form name="resident_form" class="validate">
  <div class="row">
    <div class="col-lg-12">
      <div class="box box-primary">
        <div class="box-header with-border">
            <div class="col-lg-6">
            <h3 class="box-title">Personal Details | Resident ID No.:
            <input name="ResIDNUm"  type="text" class="readonly readonlyfld" readonly="readonly" value="17-1004165643" /></h3>
            </div>
            <div class="col-lg-6 text-right"><input type="submit" value="Edit Resident" class="btn btn-success" /></div>
            <div class="clearBoth"></div>
        </div>
          
        <!-- left -->
        <div class="col-lg-6">
          <div class="box-body">
            <div class="form-group">
              <label for="FirstName">First Name <span class="req">*</span></label>
              <input type="text" name="FirstName" class="form-control" placeholder="Enter First Name" />
            </div>
            <div class="form-group">
              <label for="MiddleName">Middle Name <span class="req">*</span></label>
              <input type="text" name="MiddleName" class="form-control" placeholder="Enter Middle Name" />
            </div>
            <div class="form-group">
              <label for="LastName">Last Name <span class="req">*</span></label>
              <input type="text" name="LastName" class="form-control" placeholder="Enter Last Name" />
            </div>
            <div class="form-group">
              <label for="Extension">Extension</label>
              <input type="text" class="form-control" placeholder="Enter Sr., Jr., III, etc" />
            </div>
            <div class="form-group">
              <label for="DOB">Date of Birth <span class="req">*</span></label>
              <input type="text" name="DOB" class="form-control"  data-inputmask="'alias': 'mm/dd/yyyy'" data-mask />
            </div>
            <div class="form-group">
              <label for="POB">Place of Birth <span class="req">*</span></label>
              <input type="text" name="POB" class="form-control" placeholder="Enter Place of Birth" />
            </div>
            <div class="form-group">
              <label for="Nationality">Nationality <span class="req">*</span></label>
              <input type="text" name="Nationality" class="form-control" placeholder="Enter Nationality (Filipino, Australian, etc)" />
            </div>
            <div class="form-group">
              <label for="Religion">Religion <span class="req">*</span></label>
              <input type="text" name="Religion" class="form-control" placeholder="Enter Religion" />
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
                <input type="radio" name="gender" class="minimal" value="Male">
                Male &nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender" class="minimal" value="Female">
                Female </div>
              <div class="col-lg-3">
                <label>PWD?</label>
                <br/>
                <input type="checkbox" name="pwd" class="minimal" value="Yes">
                Yes </div>
              <div class="col-lg-3">
                <label>Deceased?</label>
                <br/>
                <input type="checkbox" name="pwd" class="minimal" value="Yes">
                Yes </div>
              <div class="clearBoth"></div>
            </div>
            <div class="form-group">
              <div class="col-lg-5 no-pad-left">
                <label for="Bloodtype">Bloodtype <span class="req">*</span></label>
                <select name="Bloodtype" class="form-control select2"  data-placeholder="Please Select Bloodtype" style="width: 100%;">
                  <option value="" selected="selected">Please Select Bloodtype</option>
                  <option value="A+">A+</option>
                  <option value="AB+">AB+</option>
                  <option value="B+">B+</option>
                  <option value="O+">O+</option>
                </select>
              </div>
              <div class="col-lg-3">
                <label for="Height">Height</label>
                <input type="text" class="form-control"  placeholder="... cm" />
              </div>
              <div class="col-lg-3">
                <label for="Weight">Weight</label>
                <input type="text" class="form-control" placeholder="... kgs." />
              </div>
              <div class="clearBoth"></div>
            </div>
            <div class="form-group">
              <label>Civil Status <span class="req">*</span></label>
              <br/>
              <div class="col-lg-4">
                <input type="radio" name="CivilStatus" class="minimal" value="Single">
                Single<br>
                <input type="radio" name="CivilStatus" class="minimal" value="Separated">
                Separated</div>
              <div class="col-lg-4">
                <input type="radio" name="CivilStatus" class="minimal" value="Married">
                Married<br>
                <input type="radio" name="CivilStatus" class="minimal" value="Annulled">
                Annulled</div>
              <div class="col-lg-4">
                <input type="radio" name="CivilStatus" class="minimal" value="Co-habitation">
                Co-habitation<br>
                <input type="radio" name="CivilStatus" class="minimal" value="Widow or Widower">
                Widow/Widower</div>
              <div class="clearBoth"></div>
            </div>
            <div class="subform-group isMarried hideOnload">
              <div class="form-group ">
                <label for="Spouse">Spouse (if married) <span class="req">*</span></label>
                <input name="Spouse" type="text" class="form-control" placeholder="Enter Spouse Name" />
              </div>
            </div>
            <div class="form-group">
              <div class="child_fields_wrap">
                <label for="Children">Children</label>
                <input type="text" name="child[]" class="form-control" placeholder="Enter Child Name" />
              </div>
              <div class="text-right"> <a href="#" class="fa fa-plus-circle btn btn-vk add_child_button"> add child</a></div>
            </div>
            <div class="form-group">
              <label for="FathersName">Father's Name <span class="req">*</span></label>
              <input name="FathersName" type="text" class="form-control" placeholder="Enter Father's Name" />
            </div>
            <div class="form-group">
              <label for="MothersName">Mother's Name <span class="req">*</span></label>
              <input name="MothersName" type="text" class="form-control" placeholder="Enter Mother's Name" />
            </div>
            <div class="form-group res-photo">
              <div class="col-lg-5">
                <label for="UploadPhoto">Upload Photo</label>
                <input type="file" id=""/>
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
              <input type="radio" name="HomeOwnership" class="minimal" value="Owned">
              Owned &nbsp;&nbsp;&nbsp;
              <input type="radio" name="HomeOwnership" class="minimal" value="Mortgaged">
              Mortgaged &nbsp;&nbsp;&nbsp;
              <input type="radio" name="HomeOwnership" class="minimal" value="Rented">
              Rented &nbsp;&nbsp;&nbsp;
              <input type="radio" name="HomeOwnership" class="minimal" value="Living with parents">
              Living with parents &nbsp;&nbsp;&nbsp;
              <input type="radio" name="HomeOwnership" class="minimal" value="Other">
              Other </div>
            <div class="clearBoth"></div>
            <div class="form-group">
              <label for="Address">House No./Block/Lot</label>
              <input type="text" class="form-control" placeholder="Enter Block, Lot, House #" />
            </div>
            <div class="form-group">
              <label for="Street">Street</label>
              <input type="text" class="form-control" placeholder="Enter Street" />
            </div>
            <div class="form-group">
              <label for="Purok">Purok <span class="req">*</span></label>
              <input name="Purok" type="text" class="form-control" placeholder="Enter Purok" />
            </div>
            <div class="form-group">
              <label for="Barangay">Barangay <span class="req">*</span></label>
              <input type="text" class="form-control" disabled="disabled" value="Barangay Zone 2" />
            </div>
            <div class="form-group">
              <label for="City">City <span class="req">*</span></label>
              <input type="text" class="form-control" disabled="disabled" value="Cadiz City" />
            </div>
            <div class="form-group">
              <label for="Province">Province <span class="req">*</span></label>
              <input type="text" class="form-control" disabled="disabled" value="Negros Occidental" />
            </div>
            <div class="form-group">
              <label for="Region">Region <span class="req">*</span></label>
              <input type="text" class="form-control" disabled="disabled" value="Region VI" />
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
              <input name="Household" type="text" class="form-control" placeholder="Enter Household ID No." />
            </div>
            <div class="form-group">
              <label for="FamilySerialNo">Family Serial No. </label>
              <input name="FamilySerialNo" disabled="disabled" type="text" class="form-control"/>
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
              <input type="text" class="form-control" placeholder="Enter Contact Number" />
            </div>
            <div class="form-group">
              <label for="Email">Email</label>
              <input type="text" class="form-control" placeholder="Enter Email Address" />
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
                <input type="radio" name="EducationalAttainment" class="minimal" value="Elementary">
                Elementary<br>
                <input type="radio" name="EducationalAttainment" class="minimal" value="High School">
                High School</div>
              <div class="col-lg-4">
                <input type="radio" name="EducationalAttainment" class="minimal" value="College">
                College<br>
                <input type="radio" name="EducationalAttainment" class="minimal" value="Post-graduate">
                Post-graduate</div>
              <div class="col-lg-5">
                <input type="radio" name="EducationalAttainment" class="minimal" value="Vocational">
                Vocational<br>
                <input type="radio" name="EducationalAttainment" class="minimal" value="No Formal Eductaion">
                No Formal Eductaion</div>
              <div class="clearBoth"></div>
            </div>
            <div class="clearBoth"></div>
            <div class="form-group">
              <label>Employment Status</label>
              <br>
              <div class="col-lg-3 no-pad-left">
                <input type="radio" name="EmploymentStatus" class="minimal" value="Student">
                Student<br>
                <input type="radio" name="EmploymentStatus" class="minimal" value="Employed">
                Employed</div>
              <div class="col-lg-4">
                <input type="radio" name="EmploymentStatus" class="minimal" value="Retired">
                Retired<br>
                <input type="radio" name="EmploymentStatus" class="minimal" value="Unknown">
                Unknown</div>
              <div class="col-lg-5">
                <input type="radio" name="EmploymentStatus" class="minimal" value="Un-employed">
                Un-employed<br>
              </div>
              <div class="clearBoth"></div>
            </div>
            <div class="clearBoth"></div>
            <div class="form-group">
              <div class="col-lg-3 no-pad-left">
                <label>DSWD NHTS?</label>
                <br/>
                <input type="checkbox" name="NHTS" class="minimal" value="Yes">
                Yes </div>
              <div class="col-lg-3">
                <label>4Ps Member?</label>
                <br/>
                <input type="checkbox" name="4Ps" class="minimal" value="Yes">
                Yes </div>
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
              <input type="text" class="form-control" placeholder="Enter PhilHealth No." />
            </div>
            <div class="form-group">
              <label>PhilHealth Category</label>
              <br>
              <input type="radio" name="PhilHealthCategory" class="minimal" value="FE-Private">
              FE-Private &nbsp;
              <input type="radio" name="PhilHealthCategory" class="minimal" value="FE-Government">
              FE-Government &nbsp;
              <input type="radio" name="PhilHealthCategory" class="minimal" value="IE">
              IE &nbsp;
              <input type="radio" name="PhilHealthCategory" class="minimal" value="Other">
              Other </div>
            <div class="clearBoth"></div>
            <div class="form-group">
              <label>Primary Care Benefit (PCB) Member?</label>
              <br/>
              <input type="checkbox" name="pcb" class="minimal" value="Yes">
              Yes </div>
            <div class="form-group text-right">
              <input type="submit" value="Add Resident" class="btn btn-success" />
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
