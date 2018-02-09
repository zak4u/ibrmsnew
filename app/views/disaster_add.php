<form name="disaster_form" class="validate">
  <div class="row">
    <div class="col-lg-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Case Details | Case No.:
            <input name="CaseNum" type="text" class="readonly readonlyfld" readonly value="BDC-<?php echo date('y') . '-' . date('mdHis'); ?>" />
          </h3>
        </div>
        
        <!-- left -->
        <div class="col-lg-6">
          <div class="box-body">
            <div class="form-group">
              <label for="PersonsAffected">Person(s) Affected <span class="req">*</span></label>
              <textarea name="PersonsAffected" type="text" class="form-control" placeholder="Enter Name(s)"></textarea>
            </div>
            <div class="form-group">
              <label for="Street">Street Address <span class="req">*</span></label>
              <input type="text" class="form-control" />
            </div>
            <div class="form-group">
              <label for="Purok">Purok <span class="req">*</span></label>
              <input type="text" class="form-control" />
            </div>
            
            <!-- /.form-group --> 
          </div>
        </div>
        <!-- left END --> 
        
        <!-- right -->
        
        <div class="col-lg-6">
          <div class="form-group">
            <label for="DisasterType">Disaster Type <span class="req">*</span></label>
            <select name="Bloodtype" class="form-control select2"  data-placeholder="Please Select Disaster Type" style="width: 100%;">
              <option value="" selected="selected">Please Select Disaster Type</option>
              <option value="Earthquake">Earthquake</option>
              <option value="Flood">Flood</option>
              <option value="Typhoon">Typhoon</option>
              <option value="Fire">Fire</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="form-group">
            <label for="CaseDetails">Case Details <span class="req">*</span></label>
            <textarea name="CaseDetails" type="text" class="form-control" placeholder="Enter Case Details" style="height: 65px;"></textarea>
          </div>
          <div class="form-group">
            <div class="col-lg-6 no-pad-left">
              <label for="Date">Date <span class="req">*</span></label>
              <input type="text" name="" class="form-control datepicker" value="<?php echo date("m/d/Y"); ?>" />
            </div>
            <div class="col-lg-6 bootstrap-timepicker">
              <label for="Time">Time <span class="req">*</span></label>
              <input type="text" name="" class="form-control timepicker timepicker-orient-bottom"  />
            </div>
            <div class="clearBoth"></div>
          </div>
          <div class="form-group text-right">
            <input type="submit" value="Add Case" class="btn btn-success" />
          </div>
        </div>
        <!-- right END -->
        
        <div class="clearBoth"></div>
      </div>
    </div>
  </div>
</form>
