<div class="row">
  <div class="col-lg-4 col-xs-12"> </div>
  <div class="col-lg-4 col-xs-0">&nbsp;</div>
  <div class="col-lg-4 col-xs-12">
    <div class="pull-right"><a href="<?php echo base_url(); ?>purok/add" class="btn btn-success">Add New Purok</a></div>
  </div>
  <div class="clearboth"></div>
  <br/>
  <br/>
  <br/>
  <br/>
  <div class="col-lg-12">
    <div class="box box-solid">
      <div class="box-body">
        <h4>Purok Profile List</h4>
        <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th width="15%">Purok Name</th>
              <th width="30%">Address</th>
              <th width="30%">Officials</th>
              <th width="10%">&nbsp;</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Purok Name</th>
              <th>Address</th>
              <th>Officials</th>
              <th>&nbsp;</th>
            </tr>
          </tfoot>
          <tbody>
            <?php
                        if ($lists) {
                            foreach ($lists as $list) {
                                ?>
            <tr>
              <td><?php echo $list->purok_name; ?></td>
              <td><?php echo $list->purok_address; ?><br/>
                  
                  <?php if ($list->purok_lat !='' || $list->purok_long!=''){ ?>
                  
                Coordinates: <?php echo '[Lat] '.$list->purok_lat.'; [Long] '.$list->purok_long; ?><br/>
                <?php echo '<a href="https://www.google.com.ph/maps/@'.$list->purok_lat.','.$list->purok_long.',18z?hl=en" target="_blank">View on map</a>'; }?></td>
              <td><strong>Presisdent: </strong><?php echo $list->purok_president; ?><br>
                <strong>V-Presisdent: </strong><?php echo $list->purok_vice_president; ?><br>
                <strong>Secretary: </strong><?php echo $list->purok_secretary; ?><br>
                <strong>Treasurer: </strong><?php echo $list->purok_treasurer; ?></td>
              <td class="text-right"><a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url('purok/edit/' . $list->purok_id); ?>" class="glyphicon glyphicon-pencil editbtn text-green"></a><a title="Delete" data-toggle="tooltip" data-placement="top" href="<?php echo base_url('purok/delete/' . $list->purok_id); ?>" class="glyphicon glyphicon-trash deletebtn text-danger"></a></td>
            </tr>
            <?php } }else{
                            echo 'No record(s) to display.';
                            
                        }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
