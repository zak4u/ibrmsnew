<div class="row">
  <div class="col-lg-4 col-xs-12"> 
    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Case number...">
        <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
        </span> </div>
    </form>
    <!-- /.search form --> 
  </div>
  <div class="col-lg-4 col-xs-0">&nbsp;</div>
  <div class="col-lg-4 col-xs-12">
    <div class="pull-right"><a href="<?php echo base_url(); ?>judicial/add" class="btn btn-success">Add New Case</a></div>
  </div>
  <div class="clearboth"></div>
  <br/>
  <br/>
  <br/>
  <br/>
  <div class="col-lg-12">
      <div class="box box-solid">
      <div class="box-body">
    <h4>Cases List</h4>
    <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th width="15%">Case No.</th>
          <th width="40%">Parties Involved</th>
          <th width="10%">Date</th>
          <th width="10%">Status</th>
          <th width="20%">&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Case No.</th>
          <th>Parties Involved</th>
          <th>Date</th>
          <th>Status</th>
          <th>&nbsp;</th>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <td>BCN-17-1234567</td>
          <td>de la Cruz, Mondragon, Khan</td>
          <td>06/12/2016</td>
          <td>On-going</td>
          <td class="text-right"><a title="View" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url(); ?>judicial/judicial_resident_cases" class="glyphicon glyphicon-eye-open viewbtn text-info"></a> <a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url(); ?>judicial/edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
        </tr>
        <tr>
          <td>BCN-17-1234567</td>
          <td>de la Cruz, Mondragon, Khan</td>
          <td>06/12/2016</td>
          <td>Resolved</td>
          <td class="text-right"><a title="View" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url(); ?>judicial/judicial_resident_cases" class="glyphicon glyphicon-eye-open viewbtn text-info"></a> <a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url(); ?>judicial/edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
        </tr>
        <tr>
          <td>BCN-17-1234567</td>
          <td>de la Cruz, Mondragon, Khan</td>
          <td>06/12/2016</td>
          <td>Dismissed</td>
          <td class="text-right"><a title="View" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url(); ?>judicial/judicial_resident_cases" class="glyphicon glyphicon-eye-open viewbtn text-info"></a> <a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url(); ?>judicial/edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
  </div>
</div>
