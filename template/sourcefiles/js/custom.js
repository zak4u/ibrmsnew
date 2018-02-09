//options
var AdminLTEOptions = {
//Enable sidebar expand on hover effect for sidebar mini
//This option is forced to true if both the fixed layout and sidebar mini
//are used together
////sidebarExpandOnHover: true,
//BoxRefresh Plugin
////enableBoxRefresh: true,
//Bootstrap.js tooltip
    enableBSToppltip: true
};




//check URL and add class to menu
var theurl = window.location.href;
//alert(theurl);
jQuery(document).ready(function () {
    jQuery(".sidebar-menu li a").each(function () {
        var themenulia = jQuery(this).attr("href");

        if (theurl == themenulia) {
            jQuery(this).parent("li").addClass("active");
            jQuery(this).parents("li.treeview").addClass("active");
        }
    });
});



//dataTable
jQuery(function () {
    jQuery('.dataTable').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false,
        'order': [[0, "desc"]]
    });
});

//res img
if (jQuery(".res-large img").attr("src") === '') {
    jQuery(".res-large img").attr("src", "../../resident-photo/img-empty-200.jpg");
}
if (jQuery(".res-sml img").attr("src") === '') {
    jQuery(".res-sml img").attr("src", "../../resident-photo/img-empty-100.jpg");
}

//iCheck for checkbox and radio inputs
jQuery('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass: 'iradio_minimal-blue'
});
//datepicker
jQuery('.datepicker').datepicker({
    autoclose: true
});

//data mask
jQuery('[data-mask]').inputmask();


//select2 multiple
jQuery('.select2').select2();

//disable all fields
jQuery('.disableflds *').attr("disabled", "disabled");

// tooltip
jQuery(function () {
    jQuery('[data-toggle="tooltip"]').tooltip();
});



// ################# FORM validations
jQuery(document).ready(function () {
    jQuery('.deletebtn').click(function () {
        if (confirm("Are you sure you want to delete this record?") == true) {
            return true;
        } else {
            return false;
        }
    });
});

// login
function check_login(theform) {
    var why = '';
    if (theform.login_name.value == '') {
        why += "- Username should not be empty\n";
    }
    if (theform.login_password.value == '') {
        why += "- Password should not be empty\n";
    }
    if (why != "") {
        alert(why);
        return false;
    }
}
//login END
 



//KP08
jQuery(document).ready(function () {
    jQuery('form.validate[name="kp08_form"]').attr("onsubmit", "return check_kp08_form(this)");
});
function check_kp08_form(theform) {
    var why = '';
    if (theform.kp08Num.value == '') {
        why += "- Form No. should not be empty\n";
    }
    if (theform.CaseNum.value == '') {
        why += "- Case No. should not be empty\n";
    }
    if (theform.HearingDate.value == '') {
        why += "- Hearing Date should not be empty\n";
    }
    if (theform.HearingDateTime.value == '') {
        why += "- Hearing Time should not be empty\n";
    }
    if (theform.HearingDateA.value == '') {
        why += "- Select morning or afternoon\n";
    }
    if (theform.DateIssued.value == '') {
        why += "- Date Issued should not be empty\n";
    }

    if (why != "") {
        alert(why);
        return false;
    }
}
//KP08 END

//KP09
jQuery(document).ready(function () {
    jQuery('form.validate[name="kp09_form"]').attr("onsubmit", "return check_kp09_form(this)");
});
function check_kp09_form(theform) {
    var why = '';
    if (theform.kp09Num.value == '') {
        why += "- Form No. should not be empty\n";
    }
    if (theform.CaseNum.value == '') {
        why += "- Case No. should not be empty\n";
    }
    if (theform.AppearanceDate.value == '') {
        why += "- Appearance Date should not be empty\n";
    }
    if (theform.AppearanceDateTime.value == '') {
        why += "- Appearance Time should not be empty\n";
    }
    if (theform.AppearanceDateA.value == '') {
        why += "- Select morning or afternoon\n";
    }
    if (theform.DateIssued.value == '') {
        why += "- Date Issued should not be empty\n";
    }

    if (why != "") {
        alert(why);
        return false;
    }
}
//KP09 END

// ################# FORM validations END

// civil status
jQuery(document).ready(function () {

    if (jQuery("input[name='CivilStatus']:checked").val() == "Married") {
        jQuery('.isMarried').show(500);
    } else {
        jQuery('.isMarried').hide(500);
    }


    jQuery("input[name='CivilStatus']").on('ifChecked', function (event) {
        if (jQuery(this).val() == "Married") {
            jQuery('.isMarried').slideDown(500);
        } else {
            jQuery('.isMarried').slideUp(500);
        }
    });
});

// child fields
jQuery(document).ready(function () {
    var max_fields = 15; //maximum input boxes allowed
    var wrapper = jQuery(".child_fields_wrap"); //Fields wrapper
    var add_button = jQuery(".add_child_button"); //Add button ID

    var x = 1; //initlal text box count
    jQuery(add_button).click(function (e) { //on add input button click
        e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            jQuery(wrapper).append('<div class="inputplus"><input type="text" class="form-control" placeholder="Enter Child Name" name="child[]"/> <a href="#" class="remove_child fa fa-minus-circle text-danger"></a></div>'); //add input box
        } else {
            add_button.hide();
        }
    });

    jQuery(wrapper).on("click", ".remove_child", function (e) { //user click on remove text
        e.preventDefault();
        jQuery(this).parent('div').remove();
        x--;
        if (max_fields > x) {
            add_button.show();
        }
    });
});

// neighbor fields
jQuery(document).ready(function () {
    var max_fields = 5; //maximum input boxes allowed
    var wrapper = jQuery(".neighbors_fields_wrap"); //Fields wrapper
    var add_button = jQuery(".add_neighbor_button"); //Add button ID

    var x = 1; //initlal text box count
    jQuery(add_button).click(function (e) { //on add input button click
        e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            jQuery(wrapper).append('<div class="inputplus"><input type="text" class="form-control" placeholder="Enter Neighbors\' Name" name="neighbor[]"/> <a href="#" class="remove_neighbor fa fa-minus-circle text-danger"></a></div>'); //add input box
        } else {
            add_button.hide();
        }
    });

    jQuery(wrapper).on("click", ".remove_neighbor", function (e) { //user click on remove text
        e.preventDefault();
        jQuery(this).parent('div').remove();
        x--;
        if (max_fields > x) {
            add_button.show();
        }
    });
});

// check KP Form
jQuery(document).ready(function () {
    jQuery("select.kpselect").on('change', function () {
        jQuery('.kpdivs').slideUp(300);
        jQuery("#" + jQuery(this).val()).slideDown(600);
    });
});

// complainant fields
jQuery(document).ready(function () {
    var max_fields = 5; //maximum input boxes allowed
    var wrapper = jQuery(".complainant_fields_wrap"); //Fields wrapper
    var add_button = jQuery(".add_complainant_button"); //Add button ID

    var x = 1; //initlal text box count
    jQuery(add_button).click(function (e) { //on add input button click
        e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            jQuery(wrapper).append('<div class="inputplus"><input type="text" class="form-control" placeholder="Enter Complainant Name" name="complainant[]"/> <a href="#" class="remove_complainant fa fa-minus-circle text-danger"></a></div>'); //add input box
        } else {
            add_button.hide();
        }
    });

    jQuery(wrapper).on("click", ".remove_complainant", function (e) { //user click on remove text
        e.preventDefault();
        jQuery(this).parent('div').remove();
        x--;
        if (max_fields > x) {
            add_button.show();
        }
    });
});

// respondent fields
jQuery(document).ready(function () {
    var max_fields = 5; //maximum input boxes allowed
    var wrapper = jQuery(".respondent_fields_wrap"); //Fields wrapper
    var add_button = jQuery(".add_respondent_button"); //Add button ID

    var x = 1; //initlal text box count
    jQuery(add_button).click(function (e) { //on add input button click
        e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            jQuery(wrapper).append('<div class="inputplus"><input type="text" class="form-control" placeholder="Enter Respondent Name" name="respondent[]"/> <a href="#" class="remove_respondent fa fa-minus-circle text-danger"></a></div>'); //add input box
        } else {
            add_button.hide();
        }
    });

    jQuery(wrapper).on("click", ".remove_respondent", function (e) { //user click on remove text
        e.preventDefault();
        jQuery(this).parent('div').remove();
        x--;
        if (max_fields > x) {
            add_button.show();
        }
    });
});
/*disable forms after submit*/
jQuery('.content form').submit(function () {
    jQuery(this).children('input[type="submit"]').prop('disabled', true);
});


// medical isReferral
jQuery(document).ready(function () {

    if (jQuery("input[name='ModeOfConsultation']:checked").val() == "Referral") {
        jQuery('.isReferral').show(500);
    } else {
        jQuery('.isReferral').hide(500);
    }


    jQuery("input[name='ModeOfConsultation']").on('ifChecked', function (event) {
        if (jQuery(this).val() == "Referral") {
            jQuery('.isReferral').slideDown(500);
        } else {
            jQuery('.isReferral').slideUp(500);
        }
    });
});

//timepicker
jQuery(function () {
    jQuery('.timepicker').timepicker({
        showInputs: false
    });
    $('.daterangepicker').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    $('.datepicker').datepicker({
        autoclose: true
    })
});


// user
jQuery(document).ready(function () {
    jQuery('form.validate[name="user_form"]').attr("onsubmit", "return check_user_form(this)");
});
function check_user_form(theform) {
    var why = '';
    if (theform.user_firstname.value == '') {
        why += "- Firstname should not be empty\n";
    }
    if (theform.user_lastname.value == '') {
        why += "- Lastname should not be empty\n";
    }
    if (theform.user_dob.value == '') {
        why += "- Date of birth should not be empty\n";
    }
    if (theform.user_gender.value == '') {
        why += "- Gender should not be empty\n";
    }
    if (theform.user_name.value == '') {
        why += "- Username should not be empty\n";
    } else if (theform.user_name.value.length <= 7) {
        why += "- Username should be at least 8 charaters\n";
    }
    if (theform.user_password.value == '') {
        why += "- Password should not be empty\n";
    } else if (theform.user_password.value.length <= 7) {
        why += "- Password should be at least 8 charaters\n";
    }
    if (theform.user_password_confirm.value == '') {
        why += "- Password confirm should not be empty\n";
    } else if (theform.user_password.value != theform.user_password_confirm.value) {
        why += "- Password shoud be the same as password confirm\n";
    }
    if (theform.user_role.value == '') {
        why += "- Role should not be empty\n";
    }
    if (why != "") {
        alert(why);
        return false;
    }
}
//user END

// brgy
jQuery(document).ready(function () {
    jQuery('form.validate[name="brgy_form"]').attr("onsubmit", "return check_brgy_form(this)");
});
function check_brgy_form(theform) {
    var why = '';
    if (theform.bp_name.value == '') {
        why += "- Brgy name should not be empty\n";
    }
    if (theform.bp_captain.value == '') {
        why += "- Brgy captain should not be empty\n";
    }
    if (theform.bp_k1.value == '') {
        why += "- Kagawad 1 should not be empty\n";
    }
    if (theform.bp_k2.value == '') {
        why += "- Kagawad 2 should not be empty\n";
    }
    if (theform.bp_k3.value == '') {
        why += "- Kagawad 3 should not be empty\n";
    }
    if (theform.bp_k4.value == '') {
        why += "- Kagawad 4 should not be empty\n";
    }
    if (theform.bp_k5.value == '') {
        why += "- Kagawad 5 should not be empty\n";
    }
    if (theform.bp_k6.value == '') {
        why += "- Kagawad 6 should not be empty\n";
    }
    if (theform.bp_k7.value == '') {
        why += "- Kagawad 7 should not be empty\n";
    }
    if (theform.bp_secretary.value == '') {
        why += "- Secretary should not be empty\n";
    }
    if (theform.bp_treasurer.value == '') {
        why += "- Treasurer should not be empty\n";
    }
    if (theform.bp_address.value == '') {
        why += "- Brgy address should not be empty\n";
    }
    if (theform.bp_city.value == '') {
        why += "- City should not be empty\n";
    }
    if (theform.bp_province.value == '') {
        why += "- Province should not be empty\n";
    }
    if (theform.bp_region.value == '') {
        why += "- Region should not be empty\n";
    }
    if (why != "") {
        alert(why);
        return false;
    }
}
//brgy END


// purok
jQuery(document).ready(function () {
    jQuery('form.validate[name="purok_form"]').attr("onsubmit", "return check_purok_form(this)");
});
function check_purok_form(theform) {
    var why = '';
    if (theform.purok_id_num.value == '') {
        why += "- Purok ID Number should not be empty\n";
    }
    if (theform.purok_name.value == '') {
        why += "- Purok Name should not be empty\n";
    }
    if (theform.purok_president.value == '') {
        why += "- Purok President should not be empty\n";
    }
    if (theform.purok_vice_president.value == '') {
        why += "- Purok Vice President should not be empty\n";
    }
    if (theform.purok_secretary.value == '') {
        why += "- Purok Secretary should not be empty\n";
    }
    if (theform.purok_treasurer.value == '') {
        why += "- Purok Treasurer should not be empty\n";
    }

    if (why != "") {
        alert(why);
        return false;
    }
}
//purok END

// household
jQuery(document).ready(function () {
    jQuery('form.validate[name="household_form"]').attr("onsubmit", "return check_household_form(this)");
});
function check_household_form(theform) {
    var why = '';
    if (theform.household_id_num.value == '') {
        why += "- Household ID Number should not be empty\n";
    }
    if (theform.family_serial_num.value == '') {
        why += "- Family Serial Number should not be empty\n";
    }

    if (why != "") {
        alert(why);
        return false;
    }
}
//household END


// resident
jQuery(document).ready(function () {
    jQuery('form.validate[name="resident_form"]').attr("onsubmit", "return check_resident_form(this)");
});
function check_resident_form(theform) {
    var why = '';
    if (theform.res_id_num.value == '') {
        why += "- Resident ID Number should not be empty\n";
    }
    if (theform.FirstName.value == '') {
        why += "- First Name should not be empty\n";
    }
    if (theform.MiddleName.value == '') {
        why += "- Middle Name should not be empty\n";
    }
    if (theform.LastName.value == '') {
        why += "- Last Name should not be empty\n";
    }
    if (theform.DOB.value == '') {
        why += "- Date of Birth should not be empty\n";
    }
    if (theform.POB.value == '') {
        why += "- Place of Birth should not be empty\n";
    }
    if (theform.Nationality.value == '') {
        why += "- Nationality should not be empty\n";
    }
    if (theform.Religion.value == '') {
        why += "- Religion should not be empty\n";
    }
    if (theform.gender.value == '') {
        why += "- Gender should be selected\n";
    }
    if (theform.Bloodtype.value == '') {
        why += "- Bloodtype should be selected\n";
    }
    if (theform.CivilStatus.value == '') {
        why += "- Civil Status should not be empty\n";
    }
    if (theform.HomeOwnership.value == '') {
        why += "- Home Ownership should not be empty\n";
    }
    if (theform.Purok.value == '') {
        why += "- Purok Name should not be empty\n";
    }

    if (why != "") {
        alert(why);
        return false;
    }
}
//resident END

// clearance resident
jQuery(document).ready(function () {
    jQuery('form.validate[name="resident_clearance_form"]').attr("onsubmit", "return check_resident_clearance_form(this)");
});
function check_resident_clearance_form(theform) {
    var why = '';
    if (theform.clearance_resident_id.value == '') {
        why += "- Clearance ID Number should not be empty\n";
    }
    if (theform.ResidentName.value == '') {
        why += "- Resident Name should not be empty\n";
    }
    if (theform.Age.value == '') {
        why += "- Age should not be empty\n";
    }
    if (theform.Address.value == '') {
        why += "- Address should not be empty\n";
    }
    if (theform.PurposeOfClearance.value == '') {
        why += "- Clearance Purpose should not be empty\n";
    }
    if (theform.ornum.value == '') {
        why += "- O.R. Number should not be empty\n";
    }
    if (theform.DateIssued.value == '') {
        why += "- Date Issued should not be empty\n";
    }
    if (theform.DateExpire.value == '') {
        why += "- Expiry Date Purpose should not be empty\n";
    }

    if (why != "") {
        alert(why);
        return false;
    }
}
// clearance resident END

// clearance business
jQuery(document).ready(function () {
    jQuery('form.validate[name="business_clearance_form"]').attr("onsubmit", "return check_business_clearance_form(this)");
});
function check_business_clearance_form(theform) {
    var why = '';
    if (theform.clearance_business_id.value == '') {
        why += "- Clearance ID Number should not be empty\n";
    }
    if (theform.Title.value == '') {
        why += "- Title should not be empty\n";
    }
    if (theform.OwnersName.value == '') {
        why += "- Owner's Name should not be empty\n";
    }
    if (theform.Address.value == '') {
        why += "- Owner's Address should not be empty\n";
    }
    if (theform.ORNumber.value == '') {
        why += "- OR Number should not be empty\n";
    }
    if (theform.BusinessName.value == '') {
        why += "- Business Name should not be empty\n";
    }
    if (theform.BusinessType.value == '') {
        why += "- Business Type should not be empty\n";
    }
    if (theform.BusinessAddress.value == '') {
        why += "- Business Address should not be empty\n";
    }
    if (theform.Purpose.value == '') {
        why += "- Purpose should not be empty\n";
    }
    if (theform.DateIssued.value == '') {
        why += "- Date Issued should not be empty\n";
    }
    if (theform.DateExpire.value == '') {
        why += "- Expiry Date Purpose should not be empty\n";
    }

    if (why != "") {
        alert(why);
        return false;
    }
}
// clearance business END


// Medical ITR
jQuery(document).ready(function () {
    jQuery('form.validate[name="itr_form"]').attr("onsubmit", "return check_itr_form(this)");
});
function check_itr_form(theform) {
    var why = '';
    if (theform.CaseIDNum.value == '') {
        why += "- Case ID Number should not be empty\n";
    }
    if (theform.ModeOfConsultation.value == '') {
        why += "- Mode Of Consultation should not be empty\n";
    }
    if (theform.ModeOfConsultation.value == 'Referral') {
        if (theform.ReferredFrom.value == '') {
            why += "- Referred From should not be empty\n";
        }
        if (theform.ReferredTo.value == '') {
            why += "- Referred To should not be empty\n";
        }
        if (theform.ReferralReasons.value == '') {
            why += "- Reason(s) for referral should not be empty\n";
        }
        if (theform.ReferredBy.value == 'Referral') {
            why += "- Referred By should not be empty\n";
        }
    }
    if (theform.ConsultationDate.value == '') {
        why += "- Consultation Date should not be empty\n";
    }
    if (theform.ConsultationTime.value == '') {
        why += "- Consultation Time should not be empty\n";
    }
    if (theform.BloodPressure.value == '') {
        why += "- Blood Pressure should not be empty\n";
    }
    if (theform.Temperature.value == '') {
        why += "- Temperature should not be empty\n";
    }
    if (theform.AttendingProvider.value == '') {
        why += "- Attending Provider should not be empty\n";
    }
    if (theform.NatureofVisit.value == '') {
        why += "- Nature of Visit should not be empty\n";
    }
    if (theform.TypeofConsultation.value == '') {
        why += "- Type of Consultation should not be empty\n";
    }
    if (theform.ChiefComplaints.value == '') {
        why += "- Chief Complaints should not be empty\n";
    }
    if (theform.Diagnosis.value == '') {
        why += "- Diagnosis should not be empty\n";
    }
    if (theform.Medication.value == '') {
        why += "- Medication should not be empty\n";
    }
    if (theform.HealthCareProvider.value == '') {
        why += "- Health Care Provider should not be empty\n";
    }
    if (theform.LabTests.value == '') {
        why += "- Performed Laboratory Tests should not be empty\n";
    }
    if (theform.LabFindings.value == '') {
        why += "- Laboratory Findings/Impressions should not be empty\n";
    }

    if (why != "") {
        alert(why);
        return false;
    }
}
// Medical ITR END


// Medical PEDIA
jQuery(document).ready(function () {
    jQuery('form.validate[name="pedia_form"]').attr("onsubmit", "return check_pedia_form(this)");
});
function check_pedia_form(theform) {
    var why = '';
    if (theform.CaseIDNum.value == '') {
        why += "- Case ID Number should not be empty\n";
    }

    if (theform.ConsultationDate.value == '') {
        why += "- Consultation Date should not be empty\n";
    }
    if (theform.ConsultationTime.value == '') {
        why += "- Consultation Time should not be empty\n";
    }
    if (theform.NutritionalStatus.value == '') {
        why += "- Nutritional Status should not be empty\n";
    }
    if (theform.BirthHistory.value == '') {
        why += "- Birth History should not be empty\n";
    }
    if (theform.FeedingHistory.value == '') {
        why += "- Feeding History should not be empty\n";
    }
    if (theform.CardiacRate.value == '') {
        why += "- Cardiac Rate should not be empty\n";
    }
    if (theform.RespiratoryRate.value == '') {
        why += "- Respiratory Rate should not be empty\n";
    }
    if (theform.Temperature.value == '') {
        why += "- Temperature should not be empty\n";
    }

    if (theform.HeredofamilialDesease.value == '') {
        why += "- Heredofamilial Desease should not be empty\n";
    }
    if (theform.Allergies.value == '') {
        why += "- Allergies should not be empty\n";
    }
    if (theform.Complaints.value == '') {
        why += "- Complaints should not be empty\n";
    }
    if (theform.PhysicalExaminations.value == '') {
        why += "- Physical Examinations should not be empty\n";
    }
    if (theform.DiagnosisTreatment.value == '') {
        why += "- Diagnosis/Treatment should not be empty\n";
    }
    if (theform.HealthCareProvider.value == '') {
        why += "- Health Care Provider should not be empty\n";
    }


    if (why != "") {
        alert(why);
        return false;
    }
}
// Medical PEDIA END

// Medical ADULT
jQuery(document).ready(function () {
    jQuery('form.validate[name="adult_form"]').attr("onsubmit", "return check_adult_form(this)");
});
function check_adult_form(theform) {
    var why = '';
    if (theform.CaseIDNum.value == '') {
        why += "- Case ID Number should not be empty\n";
    }
    if (theform.ConsultationDate.value == '') {
        why += "- Consultation Date should not be empty\n";
    }
    if (theform.ConsultationTime.value == '') {
        why += "- Consultation Time should not be empty\n";
    }
    if (theform.BloodPressure.value == '') {
        why += "- Blood Pressure should not be empty\n";
    }

    if (theform.HeredofamilialDesease.value == '') {
        why += "- Heredofamilial Desease should not be empty\n";
    }
    if (theform.Allergies.value == '') {
        why += "- Allergies should not be empty\n";
    }
    if (theform.Complaints.value == '') {
        why += "- Complaints should not be empty\n";
    }
    if (theform.PhysicalExaminations.value == '') {
        why += "- Physical Examinations should not be empty\n";
    }
    if (theform.DiagnosisTreatment.value == '') {
        why += "- Diagnosis/Treatment should not be empty\n";
    }
    if (theform.HealthCareProvider.value == '') {
        why += "- Health Care Provider should not be empty\n";
    }


    if (why != "") {
        alert(why);
        return false;
    }
}
// Medical ADULT END

// Medical PRENATAL
jQuery(document).ready(function () {
    jQuery('form.validate[name="prenatal_form"]').attr("onsubmit", "return check_prenatal_form(this)");
});
function check_prenatal_form(theform) {
    var why = '';
    if (theform.CaseIDNum.value == '') {
        why += "- Case ID Number should not be empty\n";
    }
    if (theform.ConsultationDate.value == '') {
        why += "- Consultation Date should not be empty\n";
    }
    if (theform.ConsultationTime.value == '') {
        why += "- Consultation Time should not be empty\n";
    }

    if (theform.Gravida.value == '') {
        why += "- Gravida should not be empty\n";
    }
    if (theform.Primi.value == '') {
        why += "- Primi should not be empty\n";
    }
    if (theform.Death.value == '') {
        why += "- Death should not be empty\n";
    }
    if (theform.LMP.value == '') {
        why += "- LMP should not be empty\n";
    }
    if (theform.EDC.value == '') {
        why += "- EDC should not be empty\n";
    }
    if (theform.BHW.value == '') {
        why += "- BHW Name should not be empty\n";
    }
    if (theform.BP.value == '') {
        why += "- Blood Pressure should not be empty\n";
    }
    if (theform.Weight.value == '') {
        why += "- Weight should not be empty\n";
    }
    if (theform.Height.value == '') {
        why += "- Height should not be empty\n";
    }
    if (theform.FH.value == '') {
        why += "- Fundal Height should not be empty\n";
    }
    if (theform.FHB.value == '') {
        why += "- Fetal Heartbeat should not be empty\n";
    }

    if (theform.DiagnosisTreatment.value == '') {
        why += "- Diagnosis/Treatment should not be empty\n";
    }
    if (theform.HealthCareProvider.value == '') {
        why += "- Health Care Provider should not be empty\n";
    }


    if (why != "") {
        alert(why);
        return false;
    }
}
// Medical PRENATAL END


// Medical PRENATAL
jQuery(document).ready(function () {
    jQuery('form.validate[name="referral_form"]').attr("onsubmit", "return check_referral_form(this)");
});
function check_referral_form(theform) {
    var why = '';
    if (theform.CaseIDNum.value == '') {
        why += "- Case ID Number should not be empty\n";
    }
    if (theform.ConsultationDate.value == '') {
        why += "- Consultation Date should not be empty\n";
    }
    if (theform.ConsultationTime.value == '') {
        why += "- Consultation Time should not be empty\n";
    }

    if (theform.AttendingProvider.value == '') {
        why += "- Attending Provider should not be empty\n";
    }
    if (theform.Subjective.value == '') {
        why += "- S.ubjective should not be empty\n";
    }
    if (theform.Objective.value == '') {
        why += "- O.bjective should not be empty\n";
    }
    if (theform.Assessment.value == '') {
        why += "- A.ssessment should not be empty\n";
    }
    if (theform.Plan.value == '') {
        why += "- P.lan should not be empty\n";
    }



    if (why != "") {
        alert(why);
        return false;
    }
}
// Medical PRENATAL END





// JUDICIAL KP07
jQuery(document).ready(function () {
    jQuery('form.validate[name="kp_07_form"]').attr("onsubmit", "return check_kp_07_form(this)");
});
function check_kp_07_form(theform) {
    var why = '';
    if (theform.CaseIDNum.value == '') {
        why += "- Case ID Number should not be empty\n";
    }
    if (theform.FormIDNum.value == '') {
        why += "- Form ID Number should not be empty\n";
    }
    if (jQuery('.complainant').val() == '') {
        why += "- Complainant should not be empty\n";
    }
    if (jQuery('.respondent').val() == '') {
        why += "- Respondent should not be empty\n";
    }
    if (theform.Complaint.value == '') {
        why += "- Complaint should not be empty\n";
    }
    if (theform.Status.value == '') {
        why += "- Status should not be empty\n";
    }
    if (why != "") {
        alert(why);
        return false;
    }
}
//JUDICIAL KP07 END



//printpreview

jQuery(".printpreviewbtn").click(function () {
    /*var theurl = jQuery(this).attr("href");
     window.open(theurl,"width=816,height=576");
     return false;
     */
    event.preventDefault();
    window.open($(this).attr("href"), "popupWindow", "width=1000,height=642,scrollbars=no");

});



// check image size
jQuery(".imgfile").on("change", function(){
    if(this.files[0].size>528385){
        alert("Image Size should not be greater than max file size");
        $(".imgfile").val("");
        
        return false;
    }
});