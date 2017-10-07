<form>
  <div class="row">
    <div class="col-lg-12">
      <div class="box box-primary">
        <div class="box-header with-border">
            <div class="col-lg-6">
            <h3 class="box-title">Personal Details | Resident ID No.:
            <input type="text" class="readonly readonlyfld" readonly="readonly" value="17-1004165643" /></h3>
            </div>
            <div class="col-lg-6 text-right"><input type="submit" value="Edit Resident" class="btn btn-success" /></div>
            <div class="clearBoth"></div>
        </div>
          
        <!-- left -->
        <div class="col-lg-6">
          <div class="box-body">
            <div class="form-group">
              <label for="FirstName">First Name <span class="req">*</span></label>
              <input type="text" class="form-control" value="Lyndon" />
            </div>
            <div class="form-group">
              <label for="MiddleName">Middle Name <span class="req">*</span></label>
              <input type="text" class="form-control"  value="Mondragon"  />
            </div>
            <div class="form-group">
              <label for="LastName">Last Name <span class="req">*</span></label>
              <input type="text" class="form-control"  value="Astorga"  />
            </div>
            <div class="form-group">
              <label for="Extension">Extension</label>
              <input type="text" class="form-control"  value="III"  />
            </div>
            <div class="form-group">
              <label for="DOB">Date of Birth <span class="req">*</span></label>
              <input type="text" class="form-control"  value="01/21/1912" />
            </div>
            <div class="form-group">
              <label for="POB">Place of Birth <span class="req">*</span></label>
              <input type="text" class="form-control" value="Cadiz City"  />
            </div>
            <div class="form-group">
              <label for="Nationality">Nationality <span class="req">*</span></label>
              <input type="text" class="form-control"  value="Filipino"  />
            </div>
            <div class="form-group">
              <label for="Religion">Religion <span class="req">*</span></label>
              <input type="text" class="form-control"  value=""  />
            </div>
            <div class="form-group">
              <label for="Occupation">Occupation</label>
              <input type="text" class="form-control"  value="Janitor"  />
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
                <input type="radio" name="gender" class="minimal" value="Male" checked="checked">
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
                  <option value=" " disabled="disabled">Please Select Bloodtype</option>
                  <option value="A+">A+</option>
                  <option value="AB+">AB+</option>
                  <option value="B+" selected="selected">B+</option>
                  <option value="O+">O+</option>
                </select>
              </div>
              <div class="col-lg-3">
                <label for="Height">Height</label>
                <input type="text" class="form-control" value="5' 10"  />
              </div>
              <div class="col-lg-3">
                <label for="Weight">Weight</label>
                <input type="text" class="form-control"  value="75 kg"  />
              </div>
              <div class="clearBoth"></div>
            </div>
            <div class="form-group">
              <label>Civil Status <span class="req">*</span></label>
              <br/>
              <input type="radio" name="CivilStatus" class="minimal" value="Single">
              Single &nbsp;&nbsp;&nbsp;
              <input type="radio" name="CivilStatus" class="minimal" value="Married" checked="checked">
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
              <input type="text" class="form-control" value="Noel Astorga"  />
            </div>
            <div class="form-group">
              <label for="MothersName">Mother's Name <span class="req">*</span></label>
              <input type="text" class="form-control"  value="Jasmin Astorga"  />
            </div>
            <div class="form-group res-photo">
              <div class="col-lg-5">
                <label for="UploadPhoto">Update Photo</label>
                <input type="file" id=""/>
              </div>
              <div class="col-lg-1">&nbsp;</div>
              <div class="col-lg-4"><br/>
                or <a href="#" class="btn btn-vk fa fa-camera"> take photo</a></div>
              <div class="clearBoth"></div>
              <br/>
              <img style="width: 70px" src="<?php echo base_url(); ?>resident-photo/lyndon-astorga-200.jpg" alt="" /> </div>
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
              <input type="radio" name="HomeOwnership" class="minimal" value="Owned"  checked="checked">
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
              <input type="text" class="form-control" value="B212 L65" />
            </div>
            <div class="form-group">
              <label for="Street">Street</label>
              <input type="text" class="form-control" value="Draft Street" />
            </div>
            <div class="form-group">
              <label for="Purok">Purok <span class="req">*</span></label>

              <input type="text" class="form-control" value="Moonlighting" />
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
              <input type="text" class="form-control" value="0919 999 9999" />
            </div>
            <div class="form-group">
              <label for="Email">Email</label>
              <input type="text" class="form-control" value="hello@facebook.com" />
            </div>
            <div class="form-group text-right">
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
