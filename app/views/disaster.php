<div class="row">
  <div class="col-lg-4 col-xs-12"> <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Disaster Case ID number...">
        <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
        </span> </div>
    </form>
    <!-- /.search form --> </div>
  <div class="col-lg-4 col-xs-0">&nbsp;</div>
  <div class="col-lg-4 col-xs-12">
    <div class="pull-right"><a href="<?php echo base_url();?>disaster/add" class="btn btn-success">Add New Case</a></div>
  </div>
  <div class="clearboth"></div>
  <br/>
  <br/>
  <br/>
  <br/>
  <div class="col-lg-12">
      <div class="box box-solid">
      <div class="box-body">
    <h4>Latest Disaster Cases</h4>
    <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th width="10%">Case ID No.</th>
          <th width="20%">Person(s) Affected</th>
          <th width="15%">Case Details</th>
          <th width="15%">Location</th>
          <th width="10%">Date/Time</th>
          <th width="10%">&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th width="10%">Case ID No.</th>
          <th width="20%">Person(s) Affected</th>
          <th width="15%">Case Details</th>
          <th width="15%">Location</th>
          <th width="10%">Date/Time</th>
          <th width="10%">&nbsp;</th>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <td>BDC-17-1234567</td>
          <td>de la Cruz, Juan</td>
          <td>Vehicular Accident</td>
          <td>Purok A</td>
          <td>12/31/2017<br>3:35pm</td>
          <td class="text-right"><a title="Print Case" data-toggle="tooltip"  href="<?php echo base_url();?>disaster/print_case" class="glyphicon glyphicon-print viewbtn text-success"></a> <a title="Edit Case" data-toggle="tooltip" href="<?php echo base_url();?>disaster/edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
  </div></div>
