<form>
  <div class="row">
    <div class="col-lg-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <div class="col-lg-6">
            <h3 class="box-title">Personal Details | Resident ID No.:
              <input type="text" class="readonly readonlyfld" readonly="readonly" value="<?php echo date('y') . '-' . date('mdHis'); ?>" />
            </h3>
          </div>
          <div class="col-lg-6 text-right">
            <input type="submit" value="Add Resident" class="btn btn-success" />
          </div>
          <div class="clearBoth"></div>
        </div>
        
        <!-- left -->
        <div class="col-lg-6">
          <div class="box-body">
            <div class="form-group">
              <label for="FirstName">First Name <span class="req">*</span></label>
              <input type="text" class="form-control" placeholder="Enter First Name" />
            </div>
            <div class="form-group">
              <label for="MiddleName">Middle Name <span class="req">*</span></label>
              <input type="text" class="form-control" placeholder="Enter Middle Name" />
            </div>
            <div class="form-group">
              <label for="LastName">Last Name <span class="req">*</span></label>
              <input type="text" class="form-control" placeholder="Enter Last Name" />
            </div>
            <div class="form-group">
              <label for="Extension">Extension</label>
              <input type="text" class="form-control" placeholder="Enter Sr., Jr., III, etc" />
            </div>
            <div class="form-group">
              <label for="DOB">Date of Birth <span class="req">*</span></label>
              <input type="text" class="form-control"  data-inputmask="'alias': 'mm/dd/yyyy'" data-mask />
            </div>
            <div class="form-group">
              <label for="POB">Place of Birth <span class="req">*</span></label>
              <input type="text" class="form-control" placeholder="Enter Place of Birth" />
            </div>
            <div class="form-group">
              <label for="Nationality">Nationality <span class="req">*</span></label>
              <input type="text" class="form-control" placeholder="Enter Nationality (Filipino, Australian, etc)" />
            </div>
            <div class="form-group">
              <label for="Religion">Religion <span class="req">*</span></label>
              <input type="text" class="form-control" placeholder="Enter Religion" />
            </div>
            <div class="form-group">
              <label for="Occupation">Occupation</label>
              <input type="text" class="form-control" placeholder="Enter Occupation" />
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
                <select class="form-control select2"  data-placeholder="Please Select Bloodtype" style="width: 100%;">
                  <option value=" " selected="selected" disabled="disabled">Please Select Bloodtype</option>
                  <option value="A+">A+</option>
                  <option value="AB+">AB+</option>
                  <option value="B+">B+</option>
                  <option value="O+">O+</option>
                </select>
              </div>
              <div class="col-lg-3">
                <label for="Height">Height</label>
                <input type="text" class="form-control"  placeholder="ft' in''" />
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
              <input type="radio" name="CivilStatus" class="minimal" value="Single">
              Single &nbsp;&nbsp;&nbsp;
              <input type="radio" name="CivilStatus" class="minimal" value="Married">
              Married &nbsp;&nbsp;&nbsp;
              <input type="radio" name="CivilStatus" class="minimal" value="Separated">
              Separated &nbsp;&nbsp;&nbsp;
              <input type="radio" name="CivilStatus" class="minimal" value="Widow or Widower">
              Widow/Widower </div>
            <div class="subform-group isMarried hideOnload">
              <div class="form-group ">
                <label for="Spouse">Spouse (if married)</label>
                <input type="text" class="form-control" placeholder="Enter Spouse Name" />
              </div>
              <div class="form-group">
                <div class="child_fields_wrap">
                  <label for="Children">Children (if married)</label>
                  <input type="text" name="child[]" class="form-control" placeholder="Enter Child Name" />
                </div>
                <div class="text-right"> <a href="#" class="fa fa-plus-circle btn btn-vk add_child_button"> add child</a></div>
              </div>
            </div>
            <div class="form-group">
              <label for="FathersName">Father's Name <span class="req">*</span></label>
              <input type="text" class="form-control" placeholder="Enter Father's Name" />
            </div>
            <div class="form-group">
              <label for="MothersName">Mother's Name <span class="req">*</span></label>
              <input type="text" class="form-control" placeholder="Enter Mother's Name" />
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
              Living with parents </div>
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
              <input type="text" class="form-control" placeholder="Enter Purok" />
            </div>
            <div class="form-group">
              <label for="Barangay">Barangay <span class="req">*</span></label>
              <input type="text" class="form-control" disabled="disabled" value="Barangay Zone 2" />
            </div>
            <div class="form-group">
              <label for="City">City <span class="req">*</span></label>
              <input type="text" class="form-control" disabled="disabled" value="Cadiz City" />
            </div>
            
            <!-- /.form-group --> 
          </div>
        </div>
        <!-- left END --> 
        
        <!-- right -->
        <div class="col-lg-6">
          <div class="box-body">
            <div class="form-group">
              <label for="Province">Province <span class="req">*</span></label>
              <input type="text" class="form-control" disabled="disabled" value="Negros Occidental" />
            </div>
            <div class="form-group">
              <label for="Region">Region <span class="req">*</span></label>
              <input type="text" class="form-control" disabled="disabled" value="Region VI" />
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
