<form name="" class="validate">
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="col-lg-6">
                        <h3 class="box-title">Patient Information | Resident ID No.:
                            <input name="ResIDNUm" type="text" class="readonly readonlyfld" readonly value="17-1027201110" />
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
                            <label>Mode of Consultation <span class="req">*</span></label>
                            <br/>
                            <input type="radio" name="ModeofTransaction" class="minimal" value="Walk-in">
                            Walk-in &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="ModeofTransaction" class="minimal" value="Visited">
                            Visited &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="ModeofTransaction" class="minimal" value="Referral">
                            Referral &nbsp;&nbsp;&nbsp; </div>
                        <div class="subform-group isReferral hideOnload">
                            <div class="form-group ">
                                <div class="col-lg-6 no-pad-left">
                                    <label for="ReferredF">Referred From</label>
                                    <input name="ReferredF" type="text" class="form-control" placeholder="Referred From?" />
                                </div>
                                <div class="col-lg-6"><label for="ReferredT">Referred To</label>
                                    <input name="ReferredT" type="text" class="form-control" placeholder="Referred To?" /></div>
                                <div class="clearBoth"></div>
                            </div>
                            <div class="form-group ">
                                <label for="ReferredReasons">Reason(s) for referral</label>
                                <input name="ReferredReasons" type="text" class="form-control" placeholder="Enter Reason(s) for referral" />
                            </div>
                            <div class="form-group ">
                                <label for="ReferredBy">Referred by</label>
                                <input name="ReferredBy" type="text" class="form-control" placeholder="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-6 no-pad-left">
                                <label for="ConsultationDate">Consultation Date <span class="req">*</span></label>
                                <input type="text" name="ConsultationDate" class="form-control datepicker" />
                            </div>
                            <div class="col-lg-6 bootstrap-timepicker">
                                <label for="ConsultationTime">Consultation Time <span class="req">*</span></label>
                                <input type="text" name="ConsultationTime" class="form-control timepicker timepicker-orient-bottom"  />
                            </div>
                            <div class="clearBoth"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-6 no-pad-left">
                                <label for="BloodPressure">Blood Pressure <span class="req">*</span></label>
                                <input name="BloodPressure" type="text" class="form-control" placeholder="Enter Blood Pressure" />
                            </div>
                            <div class="col-lg-6">
                                <label for="Temperature">Temperature <span class="req">*</span></label>
                                <input name="Temperature" type="text" class="form-control" placeholder="Enter Temperature" />
                            </div>
                            <div class="clearBoth"></div>
                        </div>
                        <div class="form-group ">
                            <label for="AttendingProvider">Attending Provider</label>
                            <input name="AttendingProvider" type="text" class="form-control" placeholder="Enter Name of Attending Provider" />
                        </div>
                        <!-- /.form-group --> 
                    </div>
                </div>
                <!-- left END --> 

                <!-- right -->

                <div class="col-lg-6">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Nature of Visit <span class="req">*</span></label>
                            <br/>
                            <input type="radio" name="NatureofVisit" class="minimal" value="New consultation/case">
                            New consultation/case &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="NatureofVisit" class="minimal" value="New admission">
                            New admission &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="NatureofVisit" class="minimal" value="Follow-up visit">
                            Follow-up visit &nbsp;&nbsp;&nbsp; </div>

                        <div class="form-group">

                            <label for="Bloodtype">Type of Consultation <span class="req">*</span></label>
                            <select name="TypeofConsultation" class="form-control select2"  data-placeholder="Please Select Type of Consultation" style="width: 100%;">
                                <option value="" selected="selected">Please Select Type of Consultation</option>
                                <option value="General">General</option>
                                <option value="Family Planning">Family Planning</option>
                                <option value="Prenatal">Prenatal</option>
                                <option value="Postpartum">Postpartum</option>
                                <option value="Dental Care">Dental Care</option>
                                <option value="Child Care">Child Care</option>
                                <option value="Child Nutrition">Child Nutrition</option>
                                <option value="Child Immunization">Child Immunization</option>
                                <option value="Sick Children">Sick Children</option>
                                <option value="Adult Immunization">Adult Immunization</option>
                                <option value="Injury">Injury</option>
                                <option value="Firecracker Injury">Firecracker Injury</option>
                                <option value="Tuberculosis">Tuberculosis</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ChiefComplaints">Chief Complaints <span class="req">*</span></label>
                            <textarea class="form-control" name="ChiefComplaints" style="height: 105px"></textarea>
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
                    <h3 class="box-title">Remarks</h3>
                </div>
                <!-- left -->
                <div class="col-lg-6">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="Diagnosis">Diagnosis <span class="req">*</span></label>
                            <textarea class="form-control" name="Diagnosis" style="height: 115px"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Medication">Medication/Treatment <span class="req">*</span></label>
                            <textarea class="form-control" name="Medication" style="height: 115px"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="HealthCareProvider">Health Care Provider</label>
                            <input type="text" class="form-control" placeholder="Enter Name of Health Care Provider" />
                        </div>

                        <!-- /.form-group --> 
                    </div>
                </div>
                <!-- left END --> 

                <!-- right -->
                <div class="col-lg-6">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="LabTests">Performed Laboratory Tests <span class="req">*</span></label>
                            <textarea class="form-control" name="LabTests" style="height: 115px"></textarea>
                        </div>
                       <div class="form-group">
                            <label for="LabFindings">Laboratory Findings/Impressions <span class="req">*</span></label>
                            <textarea class="form-control" name="LabFindings" style="height: 115px"></textarea>
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
