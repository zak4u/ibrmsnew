<form>
  <div class="row">
    <div class="col-lg-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Clearance Details | Business Clearance ID No.:
            <input type="text" class="readonly readonlyfld" readonly value="BBC-<?php echo date('y') . '-' . date('mdHis'); ?>" />
          </h3>
        </div>
        <!-- left -->
        <div class="col-lg-6">
          <div class="box-body">
            <div class="form-group">
              <div class="col-lg-5 no-pad-left">
                <label for="Bloodtype">Title <span class="req">*</span></label>
                <select class="form-control select2"  data-placeholder="Please Select Title" style="width: 100%;">
                  <option value=" " selected="selected" disabled="disabled">Please Select Title</option>
                  <option value="Mr.">Mr.</option>
                  <option value="Ms.">Ms.</option>
                  <option value="Mrs.">Mrs.</option>
                </select>
              </div>
              <div class="clearBoth"></div>
            </div>
            <div class="form-group">
              <label for="OwnersName">Owner's Name <span class="req">*</span></label>
              <input type="text" class="form-control" placeholder="Enter Owner's Name" />
            </div>
            <div class="form-group">
              <label for="Address">Owner's Address <span class="req">*</span></label>
              <input type="text" class="form-control" placeholder="Enter Owner's Address" />
            </div>
            
            
            <!-- /.form-group --> 
          </div>
        </div>
        <!-- left END --> 
        
        <!-- right -->
        
        <div class="col-lg-6">
          <div class="form-group">
              <label for="BusinessType">Business Type <span class="req">*</span></label>
              <input type="text" class="form-control" placeholder="Enter Business Type" />
            </div>
            <div class="form-group">
              <label for="BusinessAddress">Business Address <span class="req">*</span></label>
              <input type="text" class="form-control" placeholder="Enter Business Address" />
            </div>
            <div class="form-group">
              <label for="ORNumber">O.R. Number <span class="req">*</span></label>
              <input type="text" class="form-control" placeholder="Enter O.R. Number" />
            </div>
          <div class="form-group">
            <div class="col-lg-6 no-pad-left">
              <label for="DateIssued">Date Issued <span class="req">*</span></label>
              <input type="text" class="readonly readonlyfld" readonly value="<?php echo date('m/d/Y'); ?>" />
            </div>
            <div class="col-lg-6">
              <label for="DateExpire">Valid Until <span class="req">*</span></label>
              <input type="text" class="readonly readonlyfld" readonly value="12/12/<?php echo date('Y'); ?>" />
            </div>
            <div class="clearBoth"></div>
          </div>
          <div class="form-group text-right">
            <input type="submit" value="Add Clearance" class="btn btn-success" />
          </div>
        </div>
        <!-- right END -->
        
        <div class="clearBoth"></div>
      </div>
    </div>
  </div>
</form>