<form  action="<?php echo base_url('medical/add_adult/' . $resid); ?>" method="post" name="adult_form" class="validate">
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="col-lg-6">
                        <h3 class="box-title">AF Case No.:
                            <input name="CaseIDNum" type="text" class="readonly readonlyfld" readonly value="AF-<?php echo date('y') . '-' . date('mdHis'); ?>" />
                            <input name="ResID" type="hidden" class="readonly readonlyfld" readonly value="<?php echo $resid; ?>" />
                        </h3>
                    </div>
                    <div class="col-lg-6 text-right">
                        <input type="submit" value="Add Record" class="btn btn-success" />
                    </div>
                    <div class="clearBoth"></div>
                </div>

                <!-- left -->
                <div class="col-lg-6">
                    <div class="box-body">

                        <div class="form-group">
                            <div class="col-lg-6 no-pad-left">
                                <label for="ConsultationDate">Consultation Date <span class="req">*</span></label>
                                <input type="text" name="ConsultationDate" class="form-control datepicker" value="<?php echo date("m/d/Y"); ?>" />
                            </div>
                            <div class="col-lg-6 bootstrap-timepicker">
                                <label for="ConsultationTime">Consultation Time <span class="req">*</span></label>
                                <input type="text" name="ConsultationTime" class="form-control timepicker timepicker-orient-bottom"  />
                            </div>
                            <div class="clearBoth"></div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-lg-6 no-pad-left">
                                <label for="NextofKin">Next of Kin</label>
                                <input type="text" name="NextofKin" class="form-control" placeholder="Enter Next of Kin" />
                            </div>
                            <div class="col-lg-6 bootstrap-timepicker">
                                <label for="Relation">Relation</label>
                                <input type="text" name="Relation" class="form-control" placeholder="Enter Relation to Kin"  />
                            </div>
                            <div class="clearBoth"></div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-lg-6 no-pad-left">
                                <label for="BloodPressure">Blood Pressure <span class="req">*</span></label>
                                <input type="text" name="BloodPressure" class="form-control" placeholder="Enter Blood Pressure" />
                            </div>
                            <div class="col-lg-6 bootstrap-timepicker">
                                <label for="NT">N/T</label>
                                <input type="text" name="NT" class="form-control" placeholder="Enter N/T"  />
                            </div>
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
                            <label for="HeredofamilialDesease">Heredofamilial Desease <span class="req">*</span></label>
                            <textarea class="form-control" name="HeredofamilialDesease" style="height: 80px"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="Allergies">Allergies <span class="req">*</span></label>
                            <textarea class="form-control" name="Allergies" style="height: 80px"></textarea>
                        </div>




                        <!-- /.form-group --> 
                    </div>
                </div>
                <!-- right END -->

                <div class="clearBoth"></div>
            </div>
        </div>

        <!-- address -->
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Consultation Details</h3>
                </div>
                <!-- left -->
                <div class="col-lg-6">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="Complaints">Complaints <span class="req">*</span></label>
                            <textarea class="form-control" name="Complaints" style="height: 80px"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="PhysicalExaminations">Physical Examinations/Vital Signs <span class="req">*</span></label>
                            <textarea class="form-control" name="PhysicalExaminations" style="height: 80px"></textarea>
                        </div>



                        <!-- /.form-group --> 
                    </div>
                </div>
                <!-- left END --> 

                <!-- right -->
                <div class="col-lg-6">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="DiagnosisTreatment">Diagnosis/Treatment <span class="req">*</span></label>
                            <textarea class="form-control" name="DiagnosisTreatment" style="height: 80px"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="HealthCareProvider">Health Care Provider <span class="req">*</span></label>
                            <input type="text" name="HealthCareProvider" class="form-control" placeholder="Enter Name of Health Care Provider" />
                        </div>
                        <div class="form-group text-right">
                            <input type="submit" value="Add Record" class="btn btn-success" />
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
