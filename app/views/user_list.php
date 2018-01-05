<?php
$session_data = $this->session->userdata('logged_in');
?>


<div class="row">
    <div class="col-lg-4 col-xs-12"> &nbsp; </div>
    <div class="col-lg-4 col-xs-0">&nbsp;</div>
    <div class="col-lg-4 col-xs-12">
        <div class="pull-right"><a href="<?php echo base_url(); ?>users/add" class="btn btn-success">Add New System User</a></div>
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
                            <th width="20%">Date Added</th>
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

                        <?php
                        if ($lists) {
                            foreach ($lists as $list) {
                                ?>


                                <tr>
                                    <td><?php echo $list->user_firstname . ' ' . $list->user_lastname; ?></td>
                                    <td><?php echo $list->user_role; ?></td>
                                    <td><?php echo date('Y-M-d H:i:s', $list->user_created); ?></td>
                                    <td class="text-right"><a title="Edit" data-toggle="tooltip" data-placement="top" href="<?php echo base_url('users/edit/' . $list->user_id); ?>" class="glyphicon glyphicon-pencil editbtn text-green"></a><?php if($list->user_id != $session_data['user_id']){?> <a title="Delete" data-toggle="tooltip" data-placement="top" href="<?php echo base_url('users/delete/' . $list->user_id); ?>" class="glyphicon glyphicon-trash deletebtn text-danger"></a><?php } ?></td>
                                </tr>


                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div></div>