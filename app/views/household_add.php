<form>
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Household Details</h3>
                </div>

                <!-- left -->
                <div class="col-lg-6">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="PurokName">Household ID No. <span class="req">*</span></label>
                            <input type="text" class="form-control readonly " readonly="readonly" value="HH-<?php echo date('y') . '-' . date('mdHis'); ?>" />
                        </div>

                        <!-- /.form-group --> 
                    </div>
                </div>
                <!-- left END --> 

                <!-- right -->

                <div class="col-lg-6">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="PurokPresident">Family Serial No. <span class="req">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter Family Serial No." />
                        </div>

                        <div class="form-group text-right">
                            <input type="submit" value="Add Household" class="btn btn-success" />
                        </div></div>
                </div>
                <!-- right END -->

                <div class="clearBoth"></div>
            </div>
        </div>
    </div>
</form>
