<form action="<?php echo base_url('users/add_user'); ?>" method="post" name="user_form" class="validate">
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Personal Details</h3>
                </div>
                <!-- left -->
                <div class="col-lg-6">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="FirstName">First Name <span class="req">*</span></label>
                            <input type="text" name="user_firstname" class="form-control" placeholder="Enter First Name" />
                        </div>
                        <div class="form-group">
                            <label for="LastName">Last Name <span class="req">*</span></label>
                            <input type="text" name="user_lastname" class="form-control" placeholder="Enter Last Name" />
                        </div>
                        <div class="form-group">
                            <label for="DOB">Date of Birth <span class="req">*</span></label>
                            <input type="text" name="user_dob" class="form-control"  data-inputmask="'alias': 'mm/dd/yyyy'" data-mask />
                        </div>
                        <div class="form-group">
                            <label for="Gender">Gender <span class="req">*</span></label>
                            <select name="user_gender" class="form-control select2"  data-placeholder="Please Select Gender" style="width: 100%;">
                                <option value="" selected="selected">Please Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <div class="clearBoth"></div>
                        </div>
                        <!-- /.form-group --> 
                    </div>
                </div>
                <!-- left END --> 

                <!-- right -->

                <div class="col-lg-6">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="Extension">Username <span class="req">*</span></label>
                            <input type="text" name="user_name" class="form-control" placeholder="Enter desired username" />
                        </div>
                        <div class="form-group">
                            <label for="Extension">Password <span class="req">*</span><small>(8 characters)</small></label>
                            <input type="password" name="user_password" class="form-control" placeholder="Enter desired password" />
                        </div>
                        <div class="form-group">
                            <label for="Extension">Password Confirm <span class="req">*</span> <small>(8 characters)</small></label>
                            <input type="password" name="user_password_confirm" class="form-control" placeholder="Confirm password" />
                        </div>
                        <div class="form-group">
                            <label for="Role">Role <span class="req">*</span></label>
                            <select name="user_role" class="form-control select2"  data-placeholder="Please Select Role" style="width: 100%;">
                                <option value="" selected="selected">Please Select Role</option>
                                <option value="Administrator">Administrator</option>
                                <option value="System Manager">System Manager</option>
                                <option value="Encoder">Encoder</option>
                            </select>
                            <div class="clearBoth"></div>
                        </div>
                        
                        <div class="form-group text-right">
                            <input type="submit" value="Add User" class="btn btn-success" />
                        </div>

                        <!-- /.form-group --> 
                    </div>
                </div>
                <!-- right END -->

                <div class="clearBoth"></div>
            </div>
        </div>
    </div>
</form>
