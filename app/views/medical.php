<div class="row">
  <div class="col-lg-4 col-xs-12"> 
    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Resident ID number...">
        <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
        </span> </div>
    </form>
    <!-- /.search form --> 
  </div>
  <div class="col-lg-4 col-xs-0">&nbsp;</div>
  <div class="col-lg-4 col-xs-12">
    <div class="pull-right"></div>
  </div>
  <div class="clearboth"></div>
  <br/>
  <br/>
  <br/>
  <br/>
  <div class="col-lg-12">
    <div class="box box-solid">
      <div class="box-body">
        <h4>Medical Records</h4>
        <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th width="15%">Record ID No.</th>
              <th width="30%">Resident Name</th>
              <th width="30%">Complaint(s)</th>
              <th width="10%">Date</th>
              <th width="10%">&nbsp;</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th width="15%">Record ID No.</th>
              <th width="30%">Resident Name</th>
              <th width="30%">Complaint(s)</th>
              <th width="10%">Date</th>
              <th width="10%">&nbsp;</th>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <td>RMR-17-1234567</td>
              <td>de la Cruz, Mondragon, Khan</td>
              <td>On-going</td>
              <td>06/12/2016</td>
              <td class="text-right"><a title="View" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url(); ?>medical/medical_resident_cases" class="glyphicon glyphicon-eye-open viewbtn text-info"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
            </tr>
            <tr>
              <td>RMR-17-1234567</td>
              <td>de la Cruz, Mondragon, Khan</td>
              <td>Resolved</td>
              <td>06/12/2016</td>
              <td class="text-right"><a title="View" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url(); ?>medical/medical_resident_cases" class="glyphicon glyphicon-eye-open viewbtn text-info"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
            </tr>
            <tr>
              <td>RMR-17-1234567</td>
              <td>de la Cruz, Mondragon, Khan</td>
              <td>Dismissed</td>
              <td>06/12/2016</td>
              <td class="text-right"><a title="View" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url(); ?>medical/medical_resident_cases" class="glyphicon glyphicon-eye-open viewbtn text-info"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
