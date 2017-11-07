<div class="row">
  <div class="col-lg-4">
    <div class="form-group">
      <label for="freq">Set Database Backup Frequency <span class="req">*</span></label>
      <select class="form-control select2"  data-placeholder="Please Select Frequency " style="width: 100%;">
        <option value="" selected="selected">Please Select Frequency</option>
        <option value="Administrator">Daily at 4:00PM</option>
        <option value="System Manager">Daily at 8:00PM</option>
        <option value="Encoder">Monthly 15th day</option>
      </select>
      <input type="submit" value="Set Frequency" class="btn btn-success" />
      <div class="clearBoth"></div>
    </div>
  </div>
  <div class="col-lg-2"></div>
  <div class="col-lg-4">
    <div class="form-group">
      <label for="freq">Manual Backup <span class="req">*</span></label>
      <br/>
      <input type="submit" value="Backup Database Now" class="btn btn-warning" />
      or
      <input type="submit" value="Full Backup Now" class="btn btn-vk" />
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th width="20%">Backup</th>
          <th width="10%">Type</th>
          <th width="10%">User Name</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th width="20%">Backup</th>
          <th width="10%">Type</th>
          <th width="10%">User Name</th>
        </tr>
      </tfoot>
      <tbody>
        <tr>
            <td>23 May 2014 03:08:03am &nbsp; &nbsp; <a href="#" target="_blank" title="Restore" data-toggle="tooltip" data-placement="top"><i class="fa fa-refresh"></i></a> <a href="#" target="_blank" title="Download ZIP" data-toggle="tooltip" data-placement="top"><i class="fa fa-file-archive-o"></i></a> </td>
          <td>Database Only</td>
          <td>Lyndon</td>
        </tr>
        <tr>
          <td>23 May 2014 03:08:03am &nbsp; &nbsp; <a href="#" target="_blank" title="Restore" data-toggle="tooltip" data-placement="top"><i class="fa fa-refresh"></i></a> <a href="#" target="_blank" title="Download ZIP" data-toggle="tooltip" data-placement="top"><i class="fa fa-file-archive-o"></i></a> </td>
          <td>Full</td>
          <td>Lyndon</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
