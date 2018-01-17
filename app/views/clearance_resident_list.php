print kulang
<div class="row">
  <div class="col-lg-4 col-xs-12"> <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form hide">
      <div class="input-group ">
        <input type="text" name="q" class="form-control" placeholder="Resident Clearance ID number...">
        <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
        </span> </div>
    </form>
    <!-- /.search form --> </div>
  <div class="col-lg-4 col-xs-0">&nbsp;</div>
  <div class="col-lg-4 col-xs-12">
    <div class="pull-right hide"><a href="<?php echo base_url();?>clearance/clearance_resident_issue" class="btn btn-success">Issue New Resident Clearance</a></div>
  </div>
  <div class="clearboth"></div>
  <br/>
  <br/>
  <br/>
  <br/>
  <div class="col-lg-12">
      <div class="box box-solid">
      <div class="box-body">
    <h4>Latest Resident Clearance Request</h4>
    <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th width="10%">Clearance ID No.</th>
          <th width="30%">Resident Name</th>
          <th width="5%">Date Issued</th>
          <th width="5%">Valid Until</th>
          <th width="10%">&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Clearance ID No.</th>
          <th>Resident Name</th>
          <th>Date Issued</th>
          <th>Valid Until</th>
          <th>&nbsp;</th>
        </tr>
      </tfoot>
      <tbody>
          
          <?php
                        if ($lists) {
                            foreach ($lists as $list) {
                                ?>
          
          
          
        <tr>
          <td><?php echo $list->rc_idnumber; ?></td>
          <td><?php echo $list->rc_name; ?></td>
          <td><?php echo $list->rc_issued; ?></td>
          <td><?php echo $list->rc_validity; ?></td>
          <td class="text-right"><a title="Print Clearance" data-toggle="tooltip"  href="<?php echo base_url('clearance/clearance_resident_print/' . $list->rc_id); ?>" class="glyphicon glyphicon-print viewbtn text-success"></a> <a title="Edit Clearance" data-toggle="tooltip" href="<?php echo base_url('clearance/clearance_resident_edit/' . $list->rc_id); ?>" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" href="<?php echo base_url('clearance/clearance_resident_delete/' . $list->rc_id); ?>" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
        </tr>
        
        
        
        <?php } }else{
                            echo 'No record(s) to display.';
                            
                        }?>
      </tbody>
    </table>
  </div>
</div>
  </div></div>
