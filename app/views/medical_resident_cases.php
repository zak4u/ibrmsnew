<div class="row">
  <div class="col-lg-12">
    <h4>Resident Name: <strong>Juan dela Cruz</strong></h4>
    <div class="clearboth"></div>
  </div>
  <br/>
  <br/>
  <div class="col-md-12"> 
    <!-- Custom Tabs -->
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab">ITR</a></li>
        <li><a href="#tab_2" data-toggle="tab">Pedia</a></li>
        <li><a href="#tab_3" data-toggle="tab">Adult</a></li>
        <li><a href="#tab_4" data-toggle="tab">Prenatal</a></li>
        <li><a href="#tab_5" data-toggle="tab">Referral</a></li>
      </ul>
      <div class="tab-content"> 
        
        <!-- TAB START -->
        <div class="tab-pane active" id="tab_1">
          <div class="pull-left">
            <h4>Individual Treatment Record</h4>
          </div>
          <div class="pull-right"><a href="<?php echo base_url(); ?>medical/itr_add" class="btn btn-success">Add New</a></div>
          <div class="clearboth"></div>
          <div class="col-md-12">
            <h4>Cases List</h4>
            <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th width="15%">Case No.</th>
                  <th width="40%">Name</th>
                  <th width="10%">Date</th>
                  <th width="20%">&nbsp;</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th width="15%">Case No.</th>
                  <th width="40%">Name</th>
                  <th width="10%">Date</th>
                  <th width="20%">&nbsp;</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>IT-17-1234567</td>
                  <td>Juan dela Cruz</td>
                  <td>06/12/2017</td>
                  <td class="text-right"><a title="Print" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url(); ?>medical/itr_print" class="glyphicon glyphicon-print viewbtn text-info"></a> <a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url(); ?>medical/itr_edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="clearboth"></div>
        </div>
        <!-- /.tab-pane --> 
        
        <!-- TAB END -->
        <!-- TAB START -->
        <div class="tab-pane" id="tab_2">
          <div class="pull-left">
            <h4>Pedia Form</h4>
            <small>for 0-9yrs & 11mos.; else, tab/records will just show; adding will be disabled</small>
          </div>
          <div class="pull-right"><a href="<?php echo base_url(); ?>medical/pedia_add" class="btn btn-success">Add New</a></div>
          <div class="clearboth"></div>
          <div class="col-md-12">
            <h4>Cases List</h4>
            <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th width="15%">Case No.</th>
                  <th width="40%">Name</th>
                  <th width="10%">Date</th>
                  <th width="20%">&nbsp;</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th width="15%">Case No.</th>
                  <th width="40%">Name</th>
                  <th width="10%">Date</th>
                  <th width="20%">&nbsp;</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>PF-17-1234567</td>
                  <td>Juan dela Cruz</td>
                  <td>06/12/2017</td>
                  <td class="text-right"><a title="View" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url(); ?>medical/pedia_view" class="glyphicon glyphicon-print viewbtn text-info"></a> <a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url(); ?>medical/pedia_edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="clearboth"></div>
        </div>
        <!-- /.tab-pane --> 
        
        <!-- TAB END -->
        <!-- TAB START -->
        <div class="tab-pane" id="tab_3">
          <div class="pull-left">
            <h4>Adult Form</h4>
            <small>for 10yrs. up; else, tab will not show if below 10yrs old</small>
          </div>
          <div class="pull-right"><a href="<?php echo base_url(); ?>medical/adult_add" class="btn btn-success">Add New</a></div>
          <div class="clearboth"></div>
          <div class="col-md-12">
            <h4>Cases List</h4>
            <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th width="15%">Case No.</th>
                  <th width="40%">Name</th>
                  <th width="10%">Date</th>
                  <th width="20%">&nbsp;</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th width="15%">Case No.</th>
                  <th width="40%">Name</th>
                  <th width="10%">Date</th>
                  <th width="20%">&nbsp;</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>AF-17-1234567</td>
                  <td>Juan dela Cruz</td>
                  <td>06/12/2017</td>
                  <td class="text-right"><a title="View" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url(); ?>medical/adult_view" class="glyphicon glyphicon-print viewbtn text-info"></a> <a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url(); ?>medical/adult_edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="clearboth"></div>
        </div>
        <!-- /.tab-pane --> 
        
        <!-- TAB END -->
        <!-- TAB START -->
        <div class="tab-pane" id="tab_4">
          <div class="pull-left">
            <h4>Prenatal Form</h4>
            <small>will show for female and appropriate age only</small>
          </div>
          <div class="pull-right"><a href="<?php echo base_url(); ?>medical/prenatal_add" class="btn btn-success">Add New</a></div>
          <div class="clearboth"></div>
          <div class="col-md-12">
            <h4>Cases List</h4>
            <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th width="15%">Case No.</th>
                  <th width="40%">Name</th>
                  <th width="10%">Date</th>
                  <th width="20%">&nbsp;</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th width="15%">Case No.</th>
                  <th width="40%">Name</th>
                  <th width="10%">Date</th>
                  <th width="20%">&nbsp;</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>PN-17-1234567</td>
                  <td>Juana dela Cruz</td>
                  <td>06/12/2017</td>
                  <td class="text-right"><a title="View" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url(); ?>medical/prenatal_view" class="glyphicon glyphicon-print viewbtn text-info"></a> <a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url(); ?>medical/prenatal_edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="clearboth"></div>
        </div>
        <!-- /.tab-pane --> 
        
        <!-- TAB END -->
        <!-- TAB START -->
        <div class="tab-pane" id="tab_5">
          <div class="pull-left">
            <h4>Referral Form</h4>
            
          </div>
          <div class="pull-right"><a href="<?php echo base_url(); ?>medical/referral_add" class="btn btn-success">Add New</a></div>
          <div class="clearboth"></div>
          <div class="col-md-12">
            <h4>Cases List</h4>
            <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th width="15%">Case No.</th>
                  <th width="40%">Name</th>
                  <th width="10%">Date</th>
                  <th width="20%">&nbsp;</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th width="15%">Case No.</th>
                  <th width="40%">Name</th>
                  <th width="10%">Date</th>
                  <th width="20%">&nbsp;</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>RF-17-1234567</td>
                  <td>Juan dela Cruz</td>
                  <td>06/12/2017</td>
                  <td class="text-right"><a title="View" data-toggle="tooltip" data-placement="top"  href="<?php echo base_url(); ?>medical/referral_view" class="glyphicon glyphicon-print viewbtn text-info"></a> <a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url(); ?>medical/referral_edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="clearboth"></div>
        </div>
        <!-- /.tab-pane --> 
        
        <!-- TAB END -->
      </div>
      <!-- /.tab-content --> 
    </div>
    <!-- nav-tabs-custom --> 
  </div>
</div>
