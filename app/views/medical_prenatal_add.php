<form  action="<?php echo base_url('medical/add_prenatal/' . $resid); ?>" method="post" name="prenatal_form" class="validate">
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="col-lg-6">
                        <h3 class="box-title">PN Case No.:
                            <input name="CaseIDNum" type="text" class="readonly readonlyfld" readonly value="PN-<?php echo date('y') . '-' . date('mdHis'); ?>" />
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
                        <div class="form-group ">
                            <div class="col-lg-4 no-pad-left">
                                <label for="Gravida">Gravida <span class="req">*</span></label>
                                <input name="Gravida" type="text" class="form-control" placeholder="Enter Gravida"  value="0" />
                            </div>
                            <div class="col-lg-4">
                                <label for="Primi">Primi <span class="req">*</span></label>
                                <input name="Primi" type="text" class="form-control" placeholder="Enter Primi"  value="0" />
                            </div>
                            <div class="col-lg-4">
                                <label for="Death">Death <span class="req">*</span></label>
                                <input name="Death" type="text" class="form-control" placeholder="Enter Death" value="0" />
                            </div>
                            <div class="clearBoth"></div>
                        </div>
                        <div class="form-group ">
                            <div class="col-lg-6 no-pad-left">
                                <label for="LMP">LMP <span class="req">*</span></label>
                                <input name="LMP" type="text" class="form-control" placeholder="Enter LMP" />
                            </div>
                            <div class="col-lg-6">
                                <label for="EDC">EDC <span class="req">*</span></label>
                                <input name="EDC" type="text" class="form-control" placeholder="Enter EDC"  />
                            </div>
                            <div class="clearBoth"></div>
                        </div>
                        <div class="form-group ">
                            <label for="BHW">BHW <span class="req">*</span></label>
                            <input name="BHW" type="text" class="form-control" placeholder="Enter name of BHW" />
                        </div>
                        <div class="form-group ">
                            <div class="col-lg-4 no-pad-left">
                                <label for="BP">BP <span class="req">*</span></label>
                                <input name="BP" type="text" class="form-control" placeholder="Enter BP" />
                            </div>
                            <div class="col-lg-4">
                                <label for="Weight">Weight (kg.) <span class="req">*</span></label>
                                <input name="Weight" type="text" class="form-control" placeholder="Enter Weight" />
                            </div>
                            <div class="col-lg-4">
                                <label for="Height">Height (cm.) <span class="req">*</span></label>
                                <input name="Height" type="text" class="form-control" placeholder="Enter Height" />
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
                            <div class="col-lg-6 no-pad-left">
                                <label for="FH">Fundal Height (cm.)<span class="req">*</span></label>
                                <input name="FH" type="text" class="form-control" placeholder="Enter Fundal Height" />
                            </div>
                            <div class="col-lg-6">
                                <label for="FHB">Fetal Heartbeat <span class="req">*</span></label>
                                <input name="FHB" type="text" class="form-control" placeholder="Enter Fetal Heartbeat" />
                            </div>
                            <div class="clearBoth"></div>
                        </div>
                        <div class="form-group">
                            <label>TT Immunization </label>
                             <br/>
                        
                                <input type="checkbox" name="Immunization[]" class="minimal" value="T1"/> T1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" name="Immunization[]" class="minimal" value="T2"/> T2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" name="Immunization[]" class="minimal" value="T3"/> T3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" name="Immunization[]" class="minimal" value="T4"/> T4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" name="Immunization[]" class="minimal" value="T5"/> T5&nbsp;&nbsp;&nbsp;
                        </div>
                        
                        <div class="form-group">
                            <label for="DiagnosisTreatment">Diagnosis/Treatment <span class="req">*</span></label>
                            <textarea class="form-control" name="DiagnosisTreatment" style="height: 115px"></textarea>
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
