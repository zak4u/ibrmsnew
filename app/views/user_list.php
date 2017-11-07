<div class="row">
  <div class="col-lg-4 col-xs-12"> &nbsp; </div>
  <div class="col-lg-4 col-xs-0">&nbsp;</div>
  <div class="col-lg-4 col-xs-12">
    <div class="pull-right"><a href="<?php echo base_url();?>users/add" class="btn btn-success">Add New System User</a></div>
  </div>
  <div class="clearboth"></div>
  <br/>
  <br/>
  <br/>
  <br/>
  <div class="col-lg-12">
      <div class="box box-solid">
      <div class="box-body">
    <h4>User List</h4>
    <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th width="30%">Full Name</th>
          <th width="20%">Role</th>
          <th width="10%">Date Added</th>
          <th width="15%">&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Full Name</th>
          <th>Role</th>
          <th>Date Added</th>
          <th>&nbsp;</th>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <td>Lyndon Astorga</td>
          <td>Administrator</td>
          <td>10/12/2017</td>
          <td class="text-right"><a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url();?>users/edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
  </div></div>