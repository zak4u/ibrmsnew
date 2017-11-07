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
        'autoWidth': false
    });
});

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
        confirm("Are you sure you want to delete this record?");
    });
});
//resident
jQuery(document).ready(function () {
    jQuery('form.validate[name="resident_form"]').attr("onsubmit", "return check_resident_form(this)");
});
function check_resident_form(theform) {
    var why = '';
    if (theform.ResIDNUm.value == '') {
        why += "- ResIDNUm should not be empty\n";
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
        why += "- Gender should not be empty\n";
    }
    if (theform.Bloodtype.value == '') {
        why += "- Bloodtype should not be empty\n";
    }
    if (theform.CivilStatus.value == '') {
        why += "- Civil Status should not be empty\n";
    }
    if (theform.CivilStatus.value == 'Married') {
        if (theform.Spouse.value == '') {
            why += "- Spouse should not be empty\n";
        }
    }
    if (theform.FathersName.value == '') {
        why += "- Father's Name should not be empty\n";
    }
    if (theform.MothersName.value == '') {
        why += "- Mother's Name should not be empty\n";
    }
    if (theform.HomeOwnership.value == '') {
        why += "- Home Ownership should not be empty\n";
    }
    if (theform.Purok.value == '') {
        why += "- Purok should not be empty\n";
    }
    if (why != "") {
        alert(why);
        return false;
    }
}
//resident END
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
//resident clearance
jQuery(document).ready(function () {
    jQuery('form.validate[name="resident_clearance_form"]').attr("onsubmit", "return check_resident_clearance_form(this)");
});
function check_resident_clearance_form(theform) {
    var why = '';
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
        why += "- Purpose of Clearance should not be empty\n";
    }
    if (theform.DateIssued.value == '') {
        why += "- Date Issued should not be empty\n";
    }
    if (theform.DateExpire.value == '') {
        why += "- Validity should not be empty\n";
    }
    if (why != "") {
        alert(why);
        return false;
    }
}
//resident clearance END
//business clearance
jQuery(document).ready(function () {
    jQuery('form.validate[name="business_clearance_form"]').attr("onsubmit", "return check_business_clearance_form(this)");
});
function check_business_clearance_form(theform) {
    var why = '';
    if (theform.Title.value == '') {
        why += "- Title should not be empty\n";
    }
    if (theform.OwnersName.value == '') {
        why += "- Owner's Name should not be empty\n";
    }
    if (theform.Address.value == '') {
        why += "- Address should not be empty\n";
    }
    if (theform.BusinessType.value == '') {
        why += "- Business Type should not be empty\n";
    }
    if (theform.BusinessAddress.value == '') {
        why += "- Business Address should not be empty\n";
    }
    if (theform.ORNumber.value == '') {
        why += "- O.R. Number should not be empty\n";
    }
    if (theform.DateIssued.value == '') {
        why += "- Date Issued should not be empty\n";
    }
    if (theform.DateExpire.value == '') {
        why += "- Validity should not be empty\n";
    }
    if (why != "") {
        alert(why);
        return false;
    }
}
//business clearance END

//judicial
jQuery(document).ready(function () {
    jQuery('form.validate[name="judicial_form"]').attr("onsubmit", "return check_judicial_form(this)");
});
function check_judicial_form(theform) {
    var why = '';
    if (theform.CaseNum.value == '') {
        why += "- Case No. should not be empty\n";
    }
    if (theform.kp07Num.value == '') {
        why += "- Form No. should not be empty\n";
    }
    if (jQuery(".complainant").val() == '') {
        why += "- Complainant should not be empty\n";
    }
    if (jQuery(".respondent").val() == '') {
        why += "- Rsespondent should not be empty\n";
    }
    if (theform.Complaint.value == '') {
        why += "- Complaint Details should not be empty\n";
    }
    if (theform.DateIssued.value == '') {
        why += "- Date Issued should not be empty\n";
    }

    if (why != "") {
        alert(why);
        return false;
    }
}
//judicial END

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
jQuery('.content form').submit(function(){
    jQuery(this).children('input[type="submit"]').prop('disabled', true);
});


// medical isReferral
// civil status
jQuery(document).ready(function () {

    if (jQuery("input[name='ModeofTransaction']:checked").val() == "Referral") {
        jQuery('.isReferral').show(500);
    } else {
        jQuery('.isReferral').hide(500);
    }


    jQuery("input[name='ModeofTransaction']").on('ifChecked', function (event) {
        if (jQuery(this).val() == "Referral") {
            jQuery('.isReferral').slideDown(500);
        } else {
            jQuery('.isReferral').slideUp(500);
        }
    });
});

//timepicker
jQuery(function (){
jQuery('.timepicker').timepicker({
    showInputs: false
  });
  $('.daterangepicker').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' });
  $('.datepicker').datepicker({
      autoclose: true
    })
  });