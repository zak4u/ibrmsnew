<form>
  <div class="row">
    <div class="col-lg-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Clearance Details | Resident Clearance ID No.:
            <input type="text" class="readonly readonlyfld" readonly value="RBC-17-1005085256" />
          </h3>
        </div>
        <!-- left -->
        <div class="col-lg-6">
          <div class="box-body">
            <div class="form-group">
              <label for="ResidentName">Resident Name <span class="req">*</span></label>
              <input type="text" class="form-control" />
            </div>
            <div class="form-group">
              <label for="Age">Age <span class="req">*</span></label>
              <input type="text" class="form-control" />
            </div>
            <div class="form-group">
              <label for="Address">Address <span class="req">*</span></label>
              <input type="text" class="form-control" />
            </div>
            
            <!-- /.form-group --> 
          </div>
        </div>
        <!-- left END --> 
        
        <!-- right -->
        
        <div class="col-lg-6">
          <div class="form-group">
            <label for="PurposeOfClearance">Clearance Purpose <span class="req">*</span></label>
            <textarea type="text" class="form-control"  style="height: 100px;"></textarea>
          </div>
          <div class="form-group">
            <div class="col-lg-6 no-pad-left">
              <label for="DateIssued">Date Today <span class="req">*</span></label>
              <input type="text" class="readonly readonlyfld" readonly value="" />
            </div>
            <div class="col-lg-6">
              <label for="DateExpire">Valid Issued <span class="req">*</span></label>
              <input type="text" class="readonly readonlyfld" readonly value="" />
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
