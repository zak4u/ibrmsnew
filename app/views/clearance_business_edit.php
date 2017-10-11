<form name="business_clearance_form" class="validate">
  <div class="row">
    <div class="col-lg-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Clearance Details | Business Clearance ID No.:
            <input type="text" class="readonly readonlyfld" readonly value="BBC-17-1005085927" />
          </h3>
        </div>
        <!-- left -->
        <div class="col-lg-6">
          <div class="box-body">
            <div class="form-group">
              <div class="col-lg-5 no-pad-left">
                <label for="Title">Title <span class="req">*</span></label>
                <select name="Title" class="form-control select2"  data-placeholder="Please Select Title" style="width: 100%;">
                  <option value=" " selected="selected">Please Select Title</option>
                  <option value="Mr.">Mr.</option>
                  <option value="Ms.">Ms.</option>
                  <option value="Mrs.">Mrs.</option>
                </select>
              </div>
              <div class="clearBoth"></div>
            </div>
            <div class="form-group">
              <label for="OwnersName">Owner's Name <span class="req">*</span></label>
              <input name="OwnersName" type="text" class="form-control" placeholder="Enter Owner's Name" />
            </div>
            <div class="form-group">
              <label for="Address">Owner's Address <span class="req">*</span></label>
              <input name="Address" type="text" class="form-control" placeholder="Enter Owner's Address" />
            </div>
            
            
            <!-- /.form-group --> 
          </div>
        </div>
        <!-- left END --> 
        
        <!-- right -->
        
        <div class="col-lg-6">
          <div class="form-group">
              <label for="BusinessType">Business Type <span class="req">*</span></label>
              <input name="BusinessType" type="text" class="form-control" placeholder="Enter Business Type" />
            </div>
            <div class="form-group">
              <label for="BusinessAddress">Business Address <span class="req">*</span></label>
              <input name="BusinessAddress" type="text" class="form-control" placeholder="Enter Business Address" />
            </div>
            <div class="form-group">
              <label for="ORNumber">O.R. Number <span class="req">*</span></label>
              <input name="ORNumber" type="text" class="form-control" placeholder="Enter O.R. Number" />
            </div>
          <div class="form-group">
            <div class="col-lg-6 no-pad-left">
              <label for="DateIssued">Date Issued <span class="req">*</span></label>
              <input name="DateIssued" type="text" class="readonly readonlyfld" readonly value="" />
            </div>
            <div class="col-lg-6">
              <label for="DateExpire">Valid Until <span class="req">*</span></label>
              <input name="DateExpire" type="text" class="readonly readonlyfld" readonly value="" />
            </div>
            <div class="clearBoth"></div>
          </div>
          <div class="form-group text-right">
            <input type="submit" value="Edit Clearance" class="btn btn-success" />
          </div>
        </div>
        <!-- right END -->
        
        <div class="clearBoth"></div>
      </div>
    </div>
  </div>
</form>
