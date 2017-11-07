<form name="kp08_form" class="validate">
  <div class="row">
    <div class="col-lg-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Form Details | KP Form No.:
            <input name="kp08Num" type="text" class="readonly readonlyfld" readonly value="KP08-17-1007144525" />
            For Case No.:
            <input name="CaseNum" type="text" class="readonly readonlyfld" readonly value="BCN-17-1007144525" />
          </h3>
        </div>
        
        <!-- left -->
        <div class="col-lg-6">
          <div class="box-body">
            <div class="form-group">
              <div class="col-lg-6 no-pad-left">
                <label for="ConsultationDate">Hearing Date <span class="req">*</span></label>
                <input type="text" name="ConsultationDate" class="form-control datepicker" />
              </div>
              <div class="col-lg-6 bootstrap-timepicker">
                <label for="ConsultationTime">Hearing Time <span class="req">*</span></label>
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
          <div class="form-group"><br>
            <label for="DateIssued">Date/Time created and filed <span class="req">*</span></label>
            <br>
            <input name="DateIssued" type="text" class="readonly readonlyfld" readonly value="<?php echo date('m/d/Y - h:i:sa '); ?>" />
            <div class="clearBoth"></div>
          </div>
          <div class="form-group text-right">
            <input type="submit" value="Add Form" class="btn btn-success" />
          </div>
        </div>
        <!-- right END -->
        
        <div class="clearBoth"></div>
      </div>
    </div>
  </div>
</form>
