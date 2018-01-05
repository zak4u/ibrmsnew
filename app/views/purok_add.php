<form  action="<?php echo base_url('purok/add_purok'); ?>" method="post" name="purok_form" class="validate">
  <div class="row">
    <div class="col-lg-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Purok Details</h3>
        </div>
        
        <!-- left -->
        <div class="col-lg-6">
          <div class="box-body">
            <div class="form-group">
              <label for="purok_id_num">Purok ID Number <span class="req">*</span></label>
              <input name="purok_id_num" type="text" class="form-control"  readonly value="PRK-<?php echo date('y') . '-' . date('mdHis'); ?>" />
            </div>
            <div class="form-group">
              <label for="purok_name">Purok Name <span class="req">*</span></label>
              <input name="purok_name" type="text" class="form-control" placeholder="Enter Purok Name" />
            </div>
            <div class="form-group">
              <label for="purok_address">Purok Address </label>
              <input name="purok_address" type="text" class="form-control" placeholder="Enter Purok Address" />
            </div>
            <div class="form-group">
              <label for="Coordinates">Coordinates </label>
              <input name="purok_lat" type="text" class="form-control" placeholder="Enter Latitude" />
              <input name="purok_long" type="text" class="form-control" placeholder="Enter Longitude" />
            </div>
            
            <!-- /.form-group --> 
          </div>
        </div>
        <!-- left END --> 
        
        <!-- right -->
        
        <div class="col-lg-6">
          <div class="form-group">
            <label for="purok_president">Purok President <span class="req">*</span></label>
            <input name="purok_president" type="text" class="form-control" placeholder="Enter Purok President's Name" />
          </div>
          <div class="form-group">
            <label for="purok_vice_president">Purok Vice President <span class="req">*</span></label>
            <input name="purok_vice_president" accept=""="text" class="form-control" placeholder="Enter Purok Vice President's Name" />
          </div>
          <div class="form-group">
            <label for="purok_secretary">Purok Secretary <span class="req">*</span></label>
            <input name="purok_secretary" type="text" class="form-control" placeholder="Enter Purok Secretary's Name" />
          </div>
          <div class="form-group">
            <label for="purok_treasurer">Purok Treasurer <span class="req">*</span></label>
            <input name="purok_treasurer" type="text" class="form-control" placeholder="Enter Purok Treasurer's Name" />
          </div>
          <div class="form-group text-right">
            <input type="submit" value="Add Purok" class="btn btn-success" />
          </div>
        </div>
        <!-- right END -->
        
        <div class="clearBoth"></div>
      </div>
    </div>
  </div>
</form>
