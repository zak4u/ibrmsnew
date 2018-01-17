<?php
	if($lists){
		foreach($lists as $list){

?>
<form  action="<?php echo base_url('clearance/edit_clearance_resident'); ?>" method="post" name="resident_clearance_form" class="validate">
  <div class="row">
    <div class="col-lg-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Clearance Details | Resident Clearance ID No.:
              <input type="text" name="clearance_resident_id" class="readonly readonlyfld" readonly="readonly" value="<?php echo $list->rc_idnumber; ?>" />
          </h3>
        </div>
        <!-- left -->
        <div class="col-lg-6">
          <div class="box-body">
            <div class="form-group">
              <label for="ResidentName">Resident Name <span class="req">*</span></label>
              <input name="ResidentName" type="text" class="form-control" value="<?php echo $list->rc_name; ?>" readonly="readonly" />
            </div>
            <div class="form-group">
              <label for="Age">Age <span class="req">*</span></label>
              <input name="Age" type="text" class="form-control" value="<?php echo $list->rc_age; ?>" readonly="readonly" />
            </div>
            <div class="form-group">
              <label for="Address">Address <span class="req">*</span></label>
              <input name="Address" type="text" class="form-control" value="<?php echo $list->rc_address; ?>" readonly="readonly" />
            </div>
            
            <!-- /.form-group --> 
          </div>
        </div>
        <!-- left END --> 
        
        <!-- right -->
        
        <div class="col-lg-6">
          <div class="form-group">
            <label for="PurposeOfClearance">Clearance Purpose <span class="req">*</span></label>
            <textarea name="PurposeOfClearance" type="text" class="form-control" style="height: 100px;"><?php echo $list->rc_purpose; ?></textarea>
          </div>
          <div class="form-group">
            <div class="col-lg-6 no-pad-left">
              <label for="DateIssued">Date Issued <span class="req">*</span></label>
              <input name="DateIssued" type="text" class="readonly readonlyfld" readonly value="<?php echo $list->rc_issued; ?>" />
            </div>
            <div class="col-lg-6">
              <label for="DateExpire">Valid Until <span class="req">*</span></label>
              <input name="DateExpire" type="text" class="readonly readonlyfld" readonly value="<?php echo $list->rc_validity; ?>" />
            </div>
            <div class="clearBoth"></div>
          </div>
          <div class="form-group text-right">
              <input type="hidden" name="rc_id" value="<?php echo $list->rc_id; ?>" />
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
