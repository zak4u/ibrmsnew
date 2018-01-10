
kulang::   links on fields ()

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
    <div class="pull-right"><a href="<?php echo base_url();?>residents/add" class="btn btn-success">Add New Resident</a></div>
  </div>
  <div class="clearboth"></div>
  <br/>
  <br/>
  <br/>
  <br/>
  <div class="col-lg-12">
    <div class="box box-solid">
      <div class="box-body">
        <h4>Resident List</h4>
        <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th width="15%">Resident ID No.</th>
              <th width="30%">Last Name</th>
              <th width="30%">First Name</th>
              <th width="5%">Gender</th>
              <th width="5%">DOB</th>
              <th width="15%">&nbsp;</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Resident ID No.</th>
              <th>Last Name</th>
              <th>First Name</th>
              <th>Gender</th>
              <th>DOB</th>
              <th>&nbsp;</th>
            </tr>
          </tfoot>
          <tbody>
              
               <?php
                        if ($lists) {
                            foreach ($lists as $list) {
                                ?>
              
              
              
           
            <tr>
              <td><?php echo $list->res_idnumber; ?></td>
              <td><?php echo $list->res_lastname; ?></td>
              <td><?php echo $list->res_firstname; ?></td>
              <td><?php echo $list->res_gender; ?></td>
              <td><?php echo $list->res_dob; ?></td>
              <td class="text-right"><a title="View" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url('residents/view/'.$list->res_id); ?>" class="glyphicon glyphicon-eye-open viewbtn text-info"></a> <a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url('residents/edit/'.$list->res_id); ?>" class="glyphicon glyphicon-pencil editbtn text-green"></a><a title="Delete" data-toggle="tooltip" data-placement="top" href="<?php echo base_url('residents/delete/'.$list->res_id); ?>" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
            </tr>
             
            
            
            <?php } }else{
                            echo 'No record(s) to display.';
                            
                        }?>
            
            
            
             <tr>
              <td>2017-1234567</td>
              <td>de la Cruz</td>
              <td>Juan</td>
              <td>Male</td>
              <td>41</td>
              <td class="text-right"><a href="<?php echo base_url();?>judicial/judicial_resident_cases" title="Pending Case(s)" data-toggle="tooltip" data-placement="top"   class="fa fa-balance-scale casebtn text-danger"></a> <a title="View" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url();?>residents/view" class="glyphicon glyphicon-eye-open viewbtn text-info"></a> <a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url();?>residents/edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
