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
    <div class="pull-right"><a href="judicial/add" class="btn btn-success">Add New Case</a></div>
  </div>
  <div class="clearboth"></div>
  <br/>
  <br/>
  <br/>
  <br/>
  <div class="col-lg-12">
    <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th width="15%">Case Num</th>
          <th width="40%">Parties Involved</th>
          <th width="20%">Added By</th>
          <th width="5%">Date</th>
          <th width="20%">&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Case Num</th>
          <th>Parties Involved</th>
          <th>Added By</th>
          <th>Date</th>
          <th>&nbsp;</th>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <td>2017-1234567-KP14</td>
          <td>de la Cruz, Mondragon, etc</td>
          <td>Juan</td>
          <td>12/31/2014</td>
          <td class="text-right"><a title="View" data-toggle="tooltip" data-placement="top"  href="judicial/view" class="glyphicon glyphicon-eye-open viewbtn text-info"></a> <a title="Edit" data-toggle="tooltip" data-placement="top" href="judicial/edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
        </tr>
        <tr>
          <td>2017-1234568-KP12</td>
          <td>de la Cruz</td>
          <td>Juana</td>
           <td>12/31/2014</td>
          <td class="text-right"><a title="view" data-toggle="tooltip"  href="judicial/view" class="glyphicon glyphicon-eye-open viewbtn text-info"></a> <a title="edit" href="judicial/edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="delete" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
        </tr>
        <tr>
          <td>2017-1234569-KP14</td>
          <td>Mondragon</td>
          <td>Felix III</td>
           <td>12/31/2014</td>
          <td class="text-right"><a title="view" data-toggle="tooltip"  href="judicial/view" class="glyphicon glyphicon-eye-open viewbtn text-info"></a> <a title="edit" href="judicial/edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="delete" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
        </tr>
        <tr>
          <td>2017-1234570-KP14</td>
          <td>de la Cruz</td>
          <td>Juan</td>
           <td>12/31/2014</td>
          <td class="text-right"><a title="view" data-toggle="tooltip"  href="judicial/view" class="glyphicon glyphicon-eye-open viewbtn text-info"></a> <a title="edit" href="judicial/edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="delete" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
        </tr>
        <tr>
          <td>2017-1234571-KP11</td>
          <td>de la Cruz</td>
          <td>Juan</td>
           <td>12/31/2014</td>
          <td class="text-right"><a title="view" data-toggle="tooltip"  href="judicial/view" class="glyphicon glyphicon-eye-open viewbtn text-info"></a> <a title="edit" href="judicial/edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="delete" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
