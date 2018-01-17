 notdone: picture; cases linked into
<?php
if ($lists) {
    foreach ($lists as $list) {

        // for age
        $dateOfBirth = $list->res_dob;
        $dateToday = date("m/d/Y");
        $ageDiff = date_diff(date_create($dateOfBirth), date_create($dateToday));

        // END for age

        function checkVal($x) {
            if ($x == 1) {
                return "Yes";
            } else {
                return "No";
            }
        }
        ?>
<div class="row">
  <div class="col-lg-10"><a href="<?php echo base_url('clearance/clearance_resident_issue/' . $list->res_id); ?>" class="btn btn-success">Issue Clearance</a> <a href="<?php echo base_url('residents/edit/' . $list->res_id); ?>" class="btn btn-warning">Edit Profile</a> <a href="<?php echo base_url(); ?>judicial/judicial_resident_cases" class="btn btn-vk">View Case(s)</a></div>
  <div class="col-lg-2 text-right"><a href="<?php echo base_url('residents/delete/' . $list->res_id); ?>" class="btn btn-danger deletebtn">Delete Profile</a></div>
  <div class="clearBoth"></div>
</div>
<br/>
<div class="col-lg-12">
  <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
    This resident has an existing judicial case! Clearance Issuance has been disabled for this resident.<br/>
    Case ID: C-2017-12345678. <a href="<?php echo base_url(); ?>judicial/judicial_resident_cases">view case</a></div>
</div>
<br class="clearBoth" />
<div class="row resprofile">
  <div class="col-lg-12">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Resident Profile</h3>
      </div>
      <!-- left -->
      <div class="col-lg-6">
        <div class="box-body">
          <div class="form-group">
            <div class="col-md-6">
              <div class="res-photo"><img src="<?php echo base_url(); ?>resident-photo/lyndon-astorga-200.jpg" alt="" /></div>
            </div>
            <div class="col-md-6"><?php echo $list->res_firstname . ' ' . $list->res_middlename . ' ' . $list->res_lastname . ' ' . $list->res_extension; ?><br>
              <?php echo $list->res_dob; ?> &bull; <?php echo $ageDiff->format('%y'); ?> yrs old<br>
              <strong>Born in</strong> <?php echo $list->res_pob; ?> &bull; <?php echo $list->res_nationality; ?><br>
              <strong>Religion</strong>: <?php echo $list->res_religion; ?><br>
              <strong>Gender</strong>: <span class="fa fa-<?php echo strtolower($list->res_gender); ?>" title="<?php echo $list->res_gender; ?>"></span></div>
            <div class="clearBoth"></div>
          </div>
          <!-- /.form-group --> 
        </div>
      </div>
      <!-- left END --> 
      
      <!-- right -->
      
      <div class="col-lg-6">
        <div class="box-body">
          <div class="col-md-6"> <strong>PWD</strong>: <?php echo checkVal($list->res_is_pwd); ?> &bull; <strong>Deceased</strong>: <?php echo checkVal($list->res_is_deceased); ?><br>
            <strong>Bloodtype</strong>: <?php echo $list->res_bloodtype; ?> <br>
            <strong>Height</strong>: <?php echo $list->res_height; ?>cm &bull; <strong>Weight</strong>: <?php echo $list->res_weight; ?>kgs<br>
            <strong>Father</strong>:<br/><?php echo $list->res_fathers_name; ?><br>
            <strong>Mother</strong>:<br/><?php echo $list->res_mothers_name; ?> </div>
          <div class="col-md-6"> <strong>Married to</strong>:<br/><?php echo $list->res_spouse; ?><br>
            <strong>Children</strong>: *** </div>
          <div class="clearBoth"></div>
          
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
          <div class="form-group"> <strong>Home Address:</strong> (<?php echo $list->res_home_ownership; ?>)<br>
            <?php echo $list->res_house_number . ' ' . $list->res_street; ?><br>
            <?php
                                echo 'Purok ';
                                foreach ($respurok as $respurok) {
                                    echo $respurok->purok_name.', ';
                                }
                                ?>
            <?php echo 'Brgy. ' . $list->res_barangay; ?><br>
            <?php echo $list->res_city . ' ' . $list->res_province; ?><br>
            <?php echo $list->res_region; ?><br>
            <br>
            <strong>Household ID:</strong> <?php echo $list->res_household_id; ?><br>
            <br>
            <strong>Contact Number:</strong> <?php echo $list->res_contact_number; ?><br>
            <br>
            <strong>Email:</strong> <?php echo $list->res_email; ?></div>
          <!-- /.form-group --> 
          
        </div>
      </div>
      <!-- left END --> 
      
      <!-- right -->
      <div class="col-lg-6">
        <div class="box-body">
          <div class="form-group hide"><strong>Neighbors :</strong> <br>
            ***<?php echo $list->res_neighbors; ?></div>
          
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
          <div class="form-group"> <strong>Educational Attainment:</strong> <?php echo $list->res_education; ?> <br>
            <strong>Employment Status:</strong> <?php echo $list->res_employment_status; ?> <br>
            <strong>DSWD NHTS?:</strong> <?php echo checkVal($list->res_is_dswdnths); ?> <br>
            <strong>4Ps Member?:</strong> <?php echo checkVal($list->res_is_4ps); ?> <br>
          </div>
          <!-- /.form-group --> 
        </div>
      </div>
      <!-- left END --> 
      
      <!-- right -->
      <div class="col-lg-6">
        <div class="form-group"> <strong>PhilHealth No.:</strong> <?php echo $list->res_philhealth_id; ?> <br>
          <strong>PhilHealth Category:</strong> <?php echo $list->res_philhealth_category; ?> <br>
          <strong>Primary Care Benefit (PCB) Member?: </strong> <?php echo checkVal($list->res_is_pcb); ?> <br>
        </div>
      </div>
      <!-- right END -->
      
      <div class="clearBoth"></div>
    </div>
  </div>
</div>
<?php
    }
} else {
    echo 'No record(s) to display.';
}
?>
