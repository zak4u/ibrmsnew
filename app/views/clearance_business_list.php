<div class="row">
  <div class="col-lg-4 col-xs-12"> <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Business Clearance ID number...">
        <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
        </span> </div>
    </form>
    <!-- /.search form --> </div>
  <div class="col-lg-4 col-xs-0">&nbsp;</div>
  <div class="col-lg-4 col-xs-12">
    <div class="pull-right"><a href="<?php echo base_url();?>clearance/clearance_business_issue" class="btn btn-success">Issue New Business Clearance</a></div>
  </div>
  <div class="clearboth"></div>
  <br/>
  <br/>
  <br/>
  <br/>
  <div class="col-lg-12">
    <h4>Latest Business Clearance Request</h4>
    <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th width="10%">Clearance ID</th>
          <th width="30%">Business Name</th>
          <th width="5%">Date Issued</th>
          <th width="5%">Valid Until</th>
          <th width="10%">&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Clearance ID</th>
          <th>Business Name</th>
          <th>Date Issued</th>
          <th>Valid Until</th>
          <th>&nbsp;</th>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <td>BBC-2017-1234567</td>
          <td>Sari- Store</td>
          <td>01/01/2017</td>
          <td>12/31/2017</td>
          <td class="text-right"><a title="Print Clearance" data-toggle="tooltip"  href="<?php echo base_url();?>clearance/clearance_business_print" class="glyphicon glyphicon-print viewbtn text-success"></a> <a title="Edit Clearance" data-toggle="tooltip" href="<?php echo base_url();?>clearance/clearance_business_edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
        </tr>
        <tr>
          <td>BBC-2017-1234567</td>
          <td>Sari- Store</td>
          <td>01/01/2017</td>
          <td>12/31/2017</td>
          <td class="text-right"><a title="Print Clearance" data-toggle="tooltip"  href="<?php echo base_url();?>clearance/clearance_business_print" class="glyphicon glyphicon-print viewbtn text-success"></a> <a title="Edit Clearance" data-toggle="tooltip" href="<?php echo base_url();?>clearance/clearance_business_edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
        </tr>
        <tr>
          <td>BBC-2017-1234567</td>
          <td>Sari- Store</td>
          <td>01/01/2017</td>
          <td>12/31/2017</td>
          <td class="text-right"><a title="Print Clearance" data-toggle="tooltip"  href="<?php echo base_url();?>clearance/clearance_business_print" class="glyphicon glyphicon-print viewbtn text-success"></a> <a title="Edit Clearance" data-toggle="tooltip" href="<?php echo base_url();?>clearance/clearance_business_edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
        </tr>
        <tr>
          <td>BBC-2017-1234567</td>
          <td>Sari- Store</td>
          <td>01/01/2017</td>
          <td>12/31/2017</td>
          <td class="text-right"><a title="Print Clearance" data-toggle="tooltip"  href="<?php echo base_url();?>clearance/clearance_business_print" class="glyphicon glyphicon-print viewbtn text-success"></a> <a title="Edit Clearance" data-toggle="tooltip" href="<?php echo base_url();?>clearance/clearance_business_edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
        </tr>
        <tr>
          <td>BBC-2017-1234567</td>
          <td>Sari- Store</td>
          <td>01/01/2017</td>
          <td>12/31/2017</td>
          <td class="text-right"><a title="Print Clearance" data-toggle="tooltip"  href="<?php echo base_url();?>clearance/clearance_business_print" class="glyphicon glyphicon-print viewbtn text-success"></a> <a title="Edit Clearance" data-toggle="tooltip" href="<?php echo base_url();?>clearance/clearance_business_edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
