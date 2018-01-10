http://www.technicalkeeda.com/codeigniter-tutorials/live-search-using-jquery-ajax-php-codeigniter-and-mysql

https://github.com/baqirfarooq/Bootstrap3-typeahead.js-use-in-Codeigniter

<form  action="<?php echo base_url('clearance/clearance_resident_add'); ?>" method="post" name="resident_clearance_form" class="validate">


    <input type="text" class="form-control" name="country_id" id="country_id">
    <input type="text" class="form-control" name="country_name" id="country_name" placeholder="Countries" autocomplete="off">



    <script>
        $(document).ready(function (e) {
            var site_url = "<?php echo base_url(); ?>";
            var input = $("input[name=country_name]");

            $.get(site_url + 'clearance/json_search_country', function (data) {
                input.typeahead({
                    source: data,
                    minLength: 1
                });
            }, 'json');

            input.change(function () {
                var current = input.typeahead("getActive");
                $('#country_id').val(current.res_id);
            });

        });
    </script>

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Clearance Details | Resident Clearance ID No.:
                        <input type="text" name="clearance_resident_id" class="readonly readonlyfld" readonly value="RBC-<?php echo date('y') . '-' . date('mdHis'); ?>" />
                    </h3>
                </div>
                <!-- left -->
                <div class="col-lg-6">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="ResidentName">Resident Name <span class="req">*</span></label>
                            <input name="ResidentName" id="ResidentName" data-provide="typeahead" type="text" class="form-control" autocomplete="off" placeholder="Enter Resident Name" />

                        </div>
                        <div class="form-group">
                            <label for="Age">Age <span class="req">*</span></label>
                            <input name="Age" id="Age" type="text" class="form-control" value="" />
                        </div>
                        <div class="form-group">
                            <label for="Address">Address <span class="req">*</span></label>
                            <input name="Address" type="text" class="form-control" value="" />
                        </div>

                        <!-- /.form-group --> 
                    </div>
                </div>
                <!-- left END --> 

                <!-- right -->

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="PurposeOfClearance">Clearance Purpose <span class="req">*</span></label>
                        <textarea name="PurposeOfClearance" type="text" class="form-control" placeholder="Enter Purpose" style="height: 100px;"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-6 no-pad-left">
                            <label for="DateIssued">Date Issued <span class="req">*</span></label>
                            <input name="DateIssued" type="text" class="readonly readonlyfld" readonly value="<?php echo date('m/d/Y'); ?>" />
                        </div>
                        <div class="col-lg-6">
                            <label for="DateExpire">Valid Until <span class="req">*</span></label>
                            <input name="DateExpire" type="text" class="readonly readonlyfld" readonly value="12/12/<?php echo date('Y'); ?>" />
                        </div>
                        <div class="clearBoth"></div>
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" value="Add Clearance" class="btn btn-success" />
                    </div>
                </div>
                <!-- right END -->

                <div class="clearBoth"></div>
            </div>
        </div>
    </div>
</form>