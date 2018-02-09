<form  action="<?php echo base_url('medical/add_referral/' . $resid); ?>" method="post" name="referral_form" class="validate">
  <div class="row">
    <div class="col-lg-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <div class="col-lg-6">
            <h3 class="box-title">RF Case No.:
              <input name="CaseIDNum" type="text" class="readonly readonlyfld" readonly value="RF-<?php echo date('y') . '-' . date('mdHis'); ?>" />
              <input name="ResID" type="hidden" class="readonly readonlyfld" readonly value="<?php echo $resid; ?>" />
            </h3>
          </div>
          <div class="col-lg-6 text-right">
            <input type="submit" value="Add Record" class="btn btn-success" />
          </div>
          <div class="clearBoth"></div>
        </div>
        
        <!-- left -->
        <div class="col-lg-6">
          <div class="box-body">
            <div class="form-group">
              <div class="col-lg-6 no-pad-left">
                <label for="ConsultationDate">Consultation Date <span class="req">*</span></label>
                <input type="text" name="ConsultationDate" class="form-control datepicker" value="<?php echo date("m/d/Y"); ?>" />
              </div>
              <div class="col-lg-6 bootstrap-timepicker">
                <label for="ConsultationTime">Consultation Time <span class="req">*</span></label>
                <input type="text" name="ConsultationTime" class="form-control timepicker timepicker-orient-bottom"  />
              </div>
              <div class="clearBoth"></div>
            </div>
            
            <!-- /.form-group --> 
          </div>
        </div>
        <!-- left END --> 
        
        <!-- right -->
        
        <div class="col-lg-6">
          <div class="box-body">
            <div class="form-group ">
              <label for="AttendingProvider">Attending Provider / BHW <span class="req">*</span></label>
              <input name="AttendingProvider" type="text" class="form-control" placeholder="Enter Name of Attending Provider" />
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
          <h3 class="box-title">S.O.A.P.</h3>
        </div>
        <!-- left -->
        <div class="col-lg-6">
          <div class="box-body">
            <div class="form-group">
              <label for="Subjective">Subjective <span class="req">*</span></label>
              <textarea class="form-control" name="Subjective" style="height: 115px"></textarea>
            </div>
            <div class="form-group">
              <label for="Objective">Objective <span class="req">*</span></label>
              <textarea class="form-control" name="Objective" style="height: 115px"></textarea>
            </div>
            
            <!-- /.form-group --> 
          </div>
        </div>
        <!-- left END --> 
        
        <!-- right -->
        <div class="col-lg-6">
          <div class="box-body">
            <div class="form-group">
              <label for="Assessment">Assessment <span class="req">*</span></label>
              <textarea class="form-control" name="Assessment" style="height: 115px"></textarea>
            </div>
            <div class="form-group">
              <label for="Plan">Plan <span class="req">*</span></label>
              <textarea class="form-control" name="Plan" style="height: 115px"></textarea>
            </div>
            <div class="form-group text-right">
              <input type="submit" value="Add Record" class="btn btn-success" />
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
