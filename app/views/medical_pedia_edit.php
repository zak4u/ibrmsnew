<?php
if ($lists) {
    foreach ($lists as $list) {
        ?>
        <form  action="<?php echo base_url('medical/edit_pedia/') . $list->res_id; ?>" method="post" name="pedia_form" class="validate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="col-lg-6">
                                <h3 class="box-title">PF Case No.:
                                    <input name="CaseIDNum" type="text" class="readonly readonlyfld" readonly value="<?php echo $list->pf_idnumber; ?>" />
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
                                    <div class="col-lg-6 no-pad-left">
                                        <label for="ConsultationDate">Consultation Date <span class="req">*</span></label>
                                        <input type="text" name="ConsultationDate" class="form-control datepicker" value="<?php echo $list->pf_date; ?>" />
                                    </div>
                                    <div class="col-lg-6 bootstrap-timepicker">
                                        <label for="ConsultationTime">Consultation Time <span class="req">*</span></label>
                                        <input type="text" name="ConsultationTime" class="form-control timepicker timepicker-orient-bottom" value="<?php echo $list->pf_time; ?>"  />
                                    </div>
                                    <div class="clearBoth"></div>
                                </div>

                                <div class="form-group ">
                                    <label for="NutritionalStatus">Nutritional Status <span class="req">*</span></label>
                                    <input name="NutritionalStatus" type="text" class="form-control" value="<?php echo $list->pf_nutritional_status; ?>" />
                                </div>


                                <div class="form-group">
                                    <label>Birth History <span class="req">*</span></label>
                                    <br/>
                                    <input type="radio" name="BirthHistory" class="minimal BirthHistory" value="Hospital">
                                    Hospital &nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="BirthHistory" class="minimal BirthHistory" value="Midwife">
                                    Midwife &nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="BirthHistory" class="minimal BirthHistory" value="Nurse">
                                    Nurse &nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="BirthHistory" class="minimal BirthHistory" value="Doctor">
                                    Doctor &nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="BirthHistory" class="minimal BirthHistory" value="Home Delivery">
                                    Home Delivery &nbsp;&nbsp;&nbsp;
                                    <br>
                                    <input type="radio" name="BirthHistory" class="minimal BirthHistory" value="Breach">
                                    Breach &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="BirthHistory" class="minimal BirthHistory" value="Hilot">
                                    Hilot &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="BirthHistory" class="minimal BirthHistory" value="CS">
                                    CS (Cesarean Section) &nbsp;&nbsp;&nbsp;

                                    <script type="text/javascript">
                                        jQuery(document).ready(function () {
                                            $(".BirthHistory[value='<?php echo $list->pf_birth_history; ?>']").iCheck('check');
                                        });
                                    </script>

                                </div>

                                <div class="form-group">
                                    <label>Feeding History <span class="req">*</span></label>
                                    <br/>
                                    <input type="radio" name="FeedingHistory" class="minimal FeedingHistory" value="Breast Feeding">
                                    Breast Feeding &nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="FeedingHistory" class="minimal FeedingHistory" value="Bottle Feeding">
                                    Bottle Feeding &nbsp;&nbsp;&nbsp;

                                    <script type="text/javascript">
                                        jQuery(document).ready(function () {
                                            $(".FeedingHistory[value='<?php echo $list->pf_feeding_history; ?>']").iCheck('check');
                                        });
                                    </script>
                                </div>

                                <div class="form-group">
                                    <label>Immunization </label>
                                    <div class="clearBoth"></div>
                                    <div class="col-lg-3 no-pad-left">
                                        <input type="checkbox" name="Immunization[]" class="minimal Immunization" value="BCG">
                                        BCG<br>
                                        <input type="checkbox" name="Immunization[]" class="minimal Immunization" value="DPT">
                                        DPT
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="checkbox" name="Immunization[]" class="minimal Immunization" value="OPV1">
                                        OPV1<br>
                                        <input type="checkbox" name="Immunization[]" class="minimal Immunization" value="DPT2">
                                        DPT2
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="checkbox" name="Immunization[]" class="minimal Immunization" value="OPV2">
                                        OPV2<br>
                                        <input type="checkbox" name="Immunization[]" class="minimal Immunization" value="DPT3">
                                        DPT3
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="checkbox" name="Immunization[]" class="minimal Immunization" value="OPV3">
                                        OPV3<br>
                                        <input type="checkbox" name="Immunization[]" class="minimal Immunization" value="Measles">
                                        Measles
                                    </div>
                                    <div class="clearBoth"></div>

                                    <?php
                                    $immunFull = $list->pf_immunization;
                                    $immunArray = explode(", ", $immunFull);
                                    for ($i = 0; $i < count($immunArray); $i++) {
                                        $thisimmun = $immunArray[$i];
                                        ?>
                                        <script type="text/javascript">
                                            jQuery(document).ready(function () {
                                                $(".Immunization[value='<?php echo $thisimmun; ?>']").iCheck('check');
                                            });
                                        </script>

                                        <?php
                                    }
                                    ?>

                                </div>


                                <!-- /.form-group --> 
                            </div>
                        </div>
                        <!-- left END --> 

                        <!-- right -->

                        <div class="col-lg-6">
                            <div class="box-body">

                                <div class="form-group">

                                    <div class="col-sm-4 no-pad-left"><label>Cardiac Rate <span class="req">*</span></label><br><input name="CardiacRate" type="text" class="form-control" placeholder="Enter CR" /></div>
                                    <div class="col-sm-4"><label>Respiratory Rate <span class="req">*</span></label><br><input name="RespiratoryRate" type="text" class="form-control" placeholder="Enter RR" /></div>
                                    <div class="col-sm-4"><label>Temperature <span class="req">*</span></label><br><input name="Temperature" type="text" class="form-control" placeholder="Enter T" /></div>
                                    <div class="clearboth"></div>
                                </div>

                                <div class="form-group">
                                    <label for="HeredofamilialDesease">Heredofamilial Desease <span class="req">*</span></label>
                                    <textarea class="form-control" name="HeredofamilialDesease" style="height: 105px"><?php echo $list->pf_heredofamilial_desease; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="Allergies">Allergies <span class="req">*</span></label>
                                    <textarea class="form-control" name="Allergies" style="height: 105px"><?php echo $list->pf_allergies; ?></textarea>
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
                                    <textarea class="form-control" name="Complaints" style="height: 115px"><?php echo $list->pf_complaints; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="PhysicalExaminations">Physical Examinations <span class="req">*</span></label>
                                    <textarea class="form-control" name="PhysicalExaminations" style="height: 115px"><?php echo $list->pf_physical_examinations; ?></textarea>
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
                                    <textarea class="form-control" name="DiagnosisTreatment" style="height: 115px"><?php echo $list->pf_diagnosis_treatment; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="HealthCareProvider">Health Care Provider <span class="req">*</span></label>
                                    <input type="text" name="HealthCareProvider" class="form-control" value="<?php echo $list->pf_healthcare_provider; ?>" />
                                </div>
                                <div class="form-group text-right">
                                    <input name="pediaID" type="hidden" class="readonly readonlyfld" readonly value="<?php echo $list->pf_id; ?>" />
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