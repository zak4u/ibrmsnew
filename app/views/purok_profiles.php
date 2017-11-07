<div class="row">
    <div class="col-lg-4 col-xs-12">

    </div>
    <div class="col-lg-4 col-xs-0">&nbsp;</div>
    <div class="col-lg-4 col-xs-12"><div class="pull-right"><a href="<?php echo base_url(); ?>purok/add" class="btn btn-success">Add New Purok</a></div></div>
    <div class="clearboth"></div>
    <br/><br/><br/><br/>
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
                <tr>

                    <td>Mabuot</td>
                    <td>Mabuout Street &nbsp;&nbsp;<a href="#" target="_blank" title="View on map" data-toggle="tooltip" data-placement="top"><i class="fa fa-map-marker"></i></a></td>
                    <td><strong>Pres:</strong> Juan Mapisan<br><strong>V-Pres:</strong> Juana Tamaran<br><strong>Sec:</strong> Sisa Tarong<br><strong>Treas:</strong> Bob Piso</td>

                    <td class="text-right"><a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url(); ?>purok/edit" class="glyphicon glyphicon-pencil editbtn text-green"></a> 
                        <a title="Delete" data-toggle="tooltip" data-placement="top" href="#" class="glyphicon glyphicon-trash deletebtn text-danger"></a>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>
        </div></div></div>