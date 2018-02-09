<?php
	if($lists){
		foreach($lists as $list){

?>
<form  action="<?php echo base_url('clearance/edit_clearance_business'); ?>" method="post" name="business_clearance_form" class="validate">
  <div class="row">
    <div class="col-lg-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Clearance Details | Business Clearance ID No.:
              <input type="text" name="clearance_business_id" class="readonly readonlyfld" readonly value="<?php echo $list->bc_idnumber; ?>" />
          </h3>
        </div>
        <!-- left -->
        <div class="col-lg-6">
          <div class="box-body">
            <div class="form-group">
              <div class="col-lg-5 no-pad-left">
                <label for="Title">Title <span class="req">*</span></label>
                <select name="Title" class="form-control select2" id="Title_sel"  data-placeholder="Please Select Title" style="width: 100%;">
                  <option value="" selected="selected">Please Select Title</option>
                  <option value="Mr.">Mr.</option>
                  <option value="Ms.">Ms.</option>
                  <option value="Mrs.">Mrs.</option>
                </select>
                <script type="text/javascript">
                document.getElementById("Title_sel").value="<?php echo $list->bc_title; ?>";
                </script>
              </div>
              <div class="clearBoth"></div>
            </div>
            <div class="form-group">
              <label for="OwnersName">Owner's Name <span class="req">*</span></label>
              <input name="OwnersName" type="text" class="form-control" value="<?php echo $list->bc_name; ?>" />
            </div>
            <div class="form-group">
              <label for="Address">Owner's Address <span class="req">*</span></label>
              <input name="Address" type="text" class="form-control" value="<?php echo $list->bc_address; ?>" />
            </div>
            <div class="form-group">
              <label for="ORNumber">O.R. Number <span class="req">*</span></label>
              <input name="ORNumber" type="text" class="form-control" value="<?php echo $list->bc_or_number; ?>" />
            </div>
            
            <!-- /.form-group --> 
          </div>
        </div>
        <!-- left END --> 
        
        <!-- right -->
        
        <div class="col-lg-6">
            <div class="form-group">
              <label for="BusinessName">Business Name <span class="req">*</span></label>
              <input name="BusinessName" type="text" class="form-control" value="<?php echo $list->bc_business_name; ?>" />
            </div>
          <div class="form-group">
              <label for="BusinessType">Business Type <span class="req">*</span></label>
              <input name="BusinessType" type="text" class="form-control" value="<?php echo $list->bc_business_type; ?>" />
            </div>
            <div class="form-group">
              <label for="BusinessAddress">Business Address <span class="req">*</span></label>
              <input name="BusinessAddress" type="text" class="form-control" value="<?php echo $list->bc_business_address; ?>" />
            </div>
            <div class="form-group">
              <label for="Purpose">Purpose <span class="req">*</span></label>
              <input name="Purpose" type="text" class="form-control" placeholder="Enter Purpose" value="<?php echo $list->bc_purpose; ?>" />
            </div>
            
          <div class="form-group">
            <div class="col-lg-6 no-pad-left">
              <label for="DateIssued">Date Issued <span class="req">*</span></label>
              <input name="DateIssued" type="text" class="readonly readonlyfld" readonly value="<?php echo $list->bc_issued; ?>" />
            </div>
            <div class="col-lg-6">
              <label for="DateExpire">Valid Until <span class="req">*</span></label>
              <input name="DateExpire" type="text" class="readonly readonlyfld" readonly value="<?php echo $list->bc_validity; ?>" />
            </div>
            <div class="clearBoth"></div>
          </div>
          <div class="form-group text-right">
              <input type="hidden" name="bc_id" value="<?php echo $list->bc_id; ?>" />
            <input type="submit" value="Edit Clearance" class="btn btn-success" />
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
