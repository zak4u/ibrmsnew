<form>
  <div class="row">
    <div class="col-lg-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Case Details | Case ID No.:
            <input type="text" class="readonly readonlyfld" readonly value="KP07-<?php echo date('y') . '-' . date('mdHis'); ?>" />
          </h3>
        </div>
        
        <!-- left -->
        <div class="col-lg-6">
          <div class="box-body">
            <div class="form-group">
              <div class="complainant_fields_wrap">
                <label for="Complainant">Complainant(s)</label>
                <input type="text" name="complainant[]" class="form-control" placeholder="Enter Complainant Name" />
              </div>
              <div class="text-right"> <a href="#" class="fa fa-plus-circle btn btn-vk add_complainant_button"> add complainant</a></div>
            </div>
            <div class="form-group">
              <div class="respondent_fields_wrap">
                <label for="Respondent">Respondent(s)</label>
                <input type="text" name="respondent[]" class="form-control" placeholder="Enter Respondent Name" />
              </div>
              <div class="text-right"> <a href="#" class="fa fa-plus-circle btn btn-vk add_respondent_button"> add respondent</a></div>
            </div>
            
            <!-- /.form-group --> 
          </div>
        </div>
        <!-- left END --> 
        
        <!-- right -->
        
        <div class="col-lg-6">
          <div class="form-group">
            <label for="Complaint">Complaint Details <span class="req">*</span></label>
            <textarea type="text" class="form-control" placeholder="Enter Complaint Details" style="height: 160px;"></textarea>
          </div>
          <div class="form-group">
            <label for="DateIssued">Date/Time created and filed <span class="req">*</span></label>
            <input type="text" class="readonly readonlyfld" readonly value="<?php echo date('m/d/Y - h:i:sa '); ?>" />
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
