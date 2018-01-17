<?php
	if($lists){
		foreach($lists as $list){

?>
<form  action="<?php echo base_url('medical/edit_itr/'). $list->res_id; ?>" method="post" name="itr_form" class="validate">
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="col-lg-6">
                        <h3 class="box-title">ITR Case No.:
                            <input name="CaseIDNum" type="text" class="readonly readonlyfld" readonly value="<?php echo $list->itr_idnumber; ?>" />
                            <input name="ResID" type="hidden" class="readonly readonlyfld" readonly value="<?php echo $list->res_id; ?>" />
                        </h3>
                    </div>
                    <div class="col-lg-6 text-right">
                        <input type="submit" value="Edit Record" class="btn btn-success" />
                    </div>
                    <div class="clearBoth"></div>
                </div>

                <!-- left -->
                <div class="col-lg-6">
                    <div class="box-body">

                        <div class="form-group">
                            <label>Mode of Consultation <span class="req">*</span></label>
                            <br/>
                            <input type="radio" name="ModeOfConsultation" class="minimal ModeOfConsultation" value="Walk-in">
                            Walk-in &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="ModeOfConsultation" class="minimal ModeOfConsultation" value="Visited">
                            Visited &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="ModeOfConsultation" class="minimal ModeOfConsultation" value="Referral">
                            Referral &nbsp;&nbsp;&nbsp; 
                            
                            <script type="text/javascript">
                                            jQuery(document).ready(function () {
                                                $(".ModeOfConsultation[value='<?php echo $list->itr_consult_mode; ?>']").iCheck('check');
                                            });
                                        </script>
                         
                        </div>
                        <div class="subform-group isReferral hideOnload">
                            <div class="form-group ">
                                <div class="col-lg-6 no-pad-left">
                                    <label for="ReferredFrom">Referred From <span class="req">*</span></label>
                                    <input name="ReferredFrom" type="text" class="form-control" value="<?php echo $list->itr_referred_from; ?>" />
                                </div>
                                <div class="col-lg-6"><label for="ReferredTo">Referred To <span class="req">*</span></label>
                                    <input name="ReferredTo" type="text" class="form-control" value="<?php echo $list->itr_referred_to; ?>" /></div>
                                <div class="clearBoth"></div>
                            </div>
                            <div class="form-group ">
                                <label for="ReferralReasons">Reason(s) for referral <span class="req">*</span></label>
                                <input name="ReferralReasons" type="text" class="form-control" value="<?php echo $list->itr_referral_reasons; ?>" />
                            </div>
                            <div class="form-group ">
                                <label for="ReferredBy">Referred by <span class="req">*</span></label>
                                <input name="ReferredBy" type="text" class="form-control" value="<?php echo $list->itr_referred_by; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-6 no-pad-left">
                                <label for="ConsultationDate">Consultation Date <span class="req">*</span></label>
                                <input type="text" name="ConsultationDate" class="form-control datepicker" value="<?php echo $list->itr_date; ?>" />
                            </div>
                            <div class="col-lg-6 bootstrap-timepicker">
                                <label for="ConsultationTime">Consultation Time <span class="req">*</span></label>
                                <input type="text" name="ConsultationTime" class="form-control timepicker timepicker-orient-bottom" value="<?php echo $list->itr_time; ?>"  />
                            </div>
                            <div class="clearBoth"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-6 no-pad-left">
                                <label for="BloodPressure">Blood Pressure <span class="req">*</span></label>
                                <input name="BloodPressure" type="text" class="form-control" value="<?php echo $list->itr_bp; ?>" />
                            </div>
                            <div class="col-lg-6">
                                <label for="Temperature">Temperature <span class="req">*</span></label>
                                <input name="Temperature" type="text" class="form-control" value="<?php echo $list->itr_temperature; ?>" />
                            </div>
                            <div class="clearBoth"></div>
                        </div>
                        <div class="form-group ">
                            <label for="AttendingProvider">Attending Provider <span class="req">*</span></label>
                            <input name="AttendingProvider" type="text" class="form-control" value="<?php echo $list->itr_attending_provider; ?>" />
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
                            <input type="radio" name="NatureofVisit" class="minimal NatureofVisit" value="New consultation/case">
                            New consultation/case &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="NatureofVisit" class="minimal NatureofVisit" value="New admission">
                            New admission &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="NatureofVisit" class="minimal NatureofVisit" value="Follow-up visit">
                            Follow-up visit &nbsp;&nbsp;&nbsp; 
                        
                        
                            
                            <script type="text/javascript">
                                            jQuery(document).ready(function () {
                                                $(".NatureofVisit[value='<?php echo $list->itr_nature_of_visit; ?>']").iCheck('check');
                                            });
                                        </script>
                        </div>

                        <div class="form-group">

                            <label for="TypeofConsultation">Type of Consultation <span class="req">*</span></label>
                            <select name="TypeofConsultation" id="TypeofConsultation_sel" class="form-control select2"  data-placeholder="Please Select Type of Consultation" style="width: 100%;">
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
                            
                            <script type="text/javascript">
                                            document.getElementById("TypeofConsultation_sel").value = "<?php echo $list->itr_consult_type; ?>";
                                        </script> 
                            
                             
                        </div>
                        <div class="form-group">
                            <label for="ChiefComplaints">Chief Complaints <span class="req">*</span></label>
                            <textarea class="form-control" name="ChiefComplaints" style="height: 105px"><?php echo $list->itr_complaints; ?></textarea>
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
                            <textarea class="form-control" name="Diagnosis" style="height: 115px"><?php echo $list->itr_diagnosis; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Medication">Medication/Treatment <span class="req">*</span></label>
                            <textarea class="form-control" name="Medication" style="height: 115px"><?php echo $list->itr_medication; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="HealthCareProvider">Health Care Provider <span class="req">*</span></label>
                            <input type="text" name="HealthCareProvider" class="form-control" value="<?php echo $list->itr_healthcare_provider; ?>" />
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
                            <textarea class="form-control" name="LabTests" style="height: 115px"><?php echo $list->itr_lab_tests; ?></textarea>
                        </div>
                       <div class="form-group">
                           <label for="LabFindings">Laboratory Findings/Impressions <span class="req">*</span></label>
                            <textarea class="form-control" name="LabFindings" style="height: 115px"><?php echo $list->itr_lab_findings; ?></textarea>
                        </div>
                        <div class="form-group text-right">
                            <input name="itrID" type="hidden" class="readonly readonlyfld" readonly value="<?php echo $list->itr_id; ?>" />
                            <input type="submit" value="Edit Record" class="btn btn-success" />
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
<?php
                    }
                }
    ?>
