<form name="kp09_form" class="validate">
  <div class="row">
    <div class="col-lg-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Form Details | KP Form No.:
            <input name="kp09Num" type="text" class="readonly readonlyfld" readonly value="KP09-<?php echo date('y') . '-' . date('mdHis'); ?>" />
            For Case No.:
            <input name="CaseNum" type="text" class="readonly readonlyfld" readonly value="BCN-17-1007144525" />
          </h3>
        </div>
        
        <!-- left -->
        <div class="col-lg-6">
          <div class="box-body">
            <div class="form-group">
              <label for="AppearanceDate">Appearance Date and Time <span class="req">*</span></label>
              <div class="clearBoth"></div>
              <div class="col-lg-6">
                <input name="AppearanceDate" type="text" class="form-control"  data-inputmask="'alias': 'mm/dd/yyyy'" data-mask />
              </div>
              <div class="col-lg-3">
                <input name="AppearanceDateTime" type="text" class="form-control"  placeholder="HH:MM" />
              </div>
              <div class="col-lg-3">
                <select name="AppearanceDateA" class="form-control select2"  data-placeholder="AM/PM" style="width: 100%;">
                  <option value="" selected="selected">AM/PM</option>
                  <option value="AM">AM</option>
                  <option value="PM">PM</option>
                </select>
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
