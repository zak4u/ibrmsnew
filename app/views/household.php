<div class="row">
    <div class="col-lg-4 col-xs-12">
        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Household ID number...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
                </span> </div>
        </form>
        <!-- /.search form --> 
    </div>
    <div class="col-lg-4 col-xs-0">&nbsp;</div>
    <div class="col-lg-4 col-xs-12"><div class="pull-right"><a href="<?php echo base_url();?>household/add" class="btn btn-success">Add New Household</a></div></div>
    <div class="clearboth"></div>
    <br/><br/><br/><br/>
    <div class="col-lg-12">
    <div class="box box-solid">
      <div class="box-body">
        <h4>Household List</h4>
        <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th width="15%">Household ID No.</th>
              <th width="15%">Family Serial No.</th>
              <th width="30%">Members</th>
              <th width="10%">Date Added</th>
              <th width="10%">&nbsp;</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th width="15%">Household ID No.</th>
              <th width="15%">Family Serial No.</th>
              <th width="30%">Members</th>
              <th width="10%">Date Added</th>
              <th width="10%">&nbsp;</th>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <td>HH-17-1031140927</td>
              <td>FSN-17-1031140927</td>
              <td>Lloydie, Charo, Lyndon</td>
              <td>06/12/2016</td>
              <td class="text-right"><a title="Edit" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url(); ?>household/edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
            </tr>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>