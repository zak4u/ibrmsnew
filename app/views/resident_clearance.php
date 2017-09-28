<div class="row">
    <div class="col-lg-4 col-xs-12">
        <!-- search form (Optional) -->
        <p>Enter resident ID Number below:</p>
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
    <div class="col-lg-4 col-xs-12">&nbsp;</div>
    <div class="clearboth"></div>
    <br/><br/><br/><br/>
    <div class="col-lg-12">
        <table id="dataTableResident" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th width="10%">ID Num</th>
                    <th width="30%">Last Name</th>
                    <th width="30%">First Name</th>
                    <th width="5%">Gender</th>
                    <th width="5%">Age</th>
                    <th width="10%">&nbsp;</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID Num</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>&nbsp;</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>2017-1234567</td>
                    <td>de la Cruz</td>
                    <td>Juan</td>
                    <td>Male</td>
                    <td>41</td>
                    <td class="text-right"><span title="Pending Case" data-toggle="tooltip" data-placement="top"   class="fa fa-balance-scale casebtn text-danger"></span>
                    </td>
                </tr>
                <tr>
                    <td>2017-1234568</td>
                    <td>de la Cruz</td>
                    <td>Juana</td>
                    <td>Female</td>
                    <td>32</td>
                    <td class="text-right"><a title="Issue Clearance" data-toggle="tooltip"  href="issue_clearance" class="fa fa-print viewbtn text-success"></a> 
                    </td>
                </tr>
                <tr>
                    <td>2017-1234569</td>
                    <td>Mondragon</td>
                    <td>Felix III</td>
                    <td>Male</td>
                    <td>46</td>
                    <td class="text-right"><a title="Issue Clearance" data-toggle="tooltip"  href="issue_clearance" class="fa fa-print viewbtn text-success"></a> 
                    </td>
                </tr>
                <tr>
                    <td>2017-1234570</td>
                    <td>de la Cruz</td>
                    <td>Juan</td>
                    <td>Male</td>
                    <td>41</td>
                    <td class="text-right"><a title="Issue Clearance" data-toggle="tooltip"  href="issue_clearance" class="fa fa-print viewbtn text-success"></a> 
                    </td>
                </tr>
                <tr>
                    <td>2017-1234571</td>
                    <td>de la Cruz</td>
                    <td>Juan</td>
                    <td>Male</td>
                    <td>41</td>
                    <td class="text-right"><a title="Issue Clearance" data-toggle="tooltip"  href="issue_clearance" class="fa fa-print viewbtn text-success"></a> 
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>