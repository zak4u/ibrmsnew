<div class="row">
  <div class="col-lg-10"><a href="<?php echo base_url();?>clearance/clearance_resident" class="btn btn-success">Issue Clearance</a> <a href="edit" class="btn btn-warning">Edit Profile</a></div>
  <div class="col-lg-2 text-right"><a href="#" class="btn btn-danger">Delete Profile</a></div>
  <div class="clearBoth"></div>
</div><br/>
<div class="col-lg-12">
  <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
    This resident has an existing judicial case! Clearance Issuance has been disabled for this resident.<br/>
    Case ID: C-2017-12345678. <a href="#">view case</a></div>
</div>
<br/>
<form class="disableflds">
  <div class="row">
    <div class="col-lg-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Personal Details</h3>
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
            <div class="form-group">
              <label for="Spouse">Spouse (if married)</label>
              <input type="text" class="form-control"  value="Janzy So"  />
            </div>
            <div class="form-group">
              <label for="Spouse">Children (if married)</label>
              <input type="text" class="form-control"  value="" />
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
              <label for="UploadPhoto">Photo</label>
              <img src="<?php echo base_url(); ?>resident-photo/lyndon-astorga-200.jpg" alt="" /> </div>
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
              <label for="Address">Address</label>
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
              <label for="Neighbors">Neighbors (at least 2)</label>
              <select class="form-control select2" multiple="multiple" data-placeholder="Enter Neighbors' Names" style="width: 100%;">
                <option selected="selected">Juan</option>
                <option selected="selected">Juanita</option>
                <option>Felder</option>
                <option selected="selected">Felix</option>
                <option>Dan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="ContactNumber">Contact Number</label>
              <input type="text" class="form-control" value="0919 999 9999" />
            </div>
            <div class="form-group">
              <label for="Email">Email</label>
              <input type="text" class="form-control" value="hello@facebook.com" />
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
