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


// LINE chart
$(function () {
    "use strict";
// LINE CHART CASES
    var line = new Morris.Line({
        element: 'line-chart-cases',
        resize: true,
        data: [
            {y: '2016 Q1', item1: 2666},
            {y: '2016 Q2', item1: 2778},
            {y: '2016 Q3', item1: 4912},
            {y: '2016 Q4', item1: 3767},
            {y: '2017 Q1', item1: 6810},
            {y: '2017 Q2', item1: 20},
            {y: '2017 Q3', item1: 200},
            {y: '2017 Q4', item1: 0}
        ],
        xkey: 'y',
        ykeys: ['item1'],
        labels: ['Item 1'],
        lineColors: ['#3c8dbc'],
        hideHover: 'auto'
    });
// LINE CHART MEDICAL
    var line = new Morris.Line({
        element: 'line-chart-medical',
        resize: true,
        data: [
            {y: '2016 Q1', item1: 2666},
            {y: '2016 Q2', item1: 2778},
            {y: '2016 Q3', item1: 4912},
            {y: '2016 Q4', item1: 3767},
            {y: '2017 Q1', item1: 6810},
            {y: '2017 Q2', item1: 5670},
            {y: '2017 Q3', item1: 4820},
            {y: '2017 Q4', item1: 15073}
        ],
        xkey: 'y',
        ykeys: ['item1'],
        labels: ['Item 1'],
        lineColors: ['#3c8dbc'],
        hideHover: 'auto'
    });
});
// LINE chart END


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



// validations
jQuery(document).ready(function () {
    jQuery('.deletebtn').click(function () {
        confirm("Are you sure you want to delete this record?");
    });
});


// civil status
jQuery(document).ready(function () {

    if ($("input[name='CivilStatus']:checked").val() == "Married") {
        $('.isMarried').show(500);
    } else {
        $('.isMarried').hide(500);
    }


    $("input[name='CivilStatus']").on('ifChecked', function (event) {
        if ($(this).val() == "Married") {
            $('.isMarried').slideDown(500);
        } else {
            $('.isMarried').slideUp(500);
        }
    });
});

// child fields
$(document).ready(function () {
    var max_fields = 15; //maximum input boxes allowed
    var wrapper = $(".child_fields_wrap"); //Fields wrapper
    var add_button = $(".add_child_button"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function (e) { //on add input button click
        e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="inputplus"><input type="text" class="form-control" placeholder="Enter Child Name" name="child[]"/> <a href="#" class="remove_child fa fa-minus-circle text-danger"></a></div>'); //add input box
        } else {
            add_button.hide();
        }
    });

    $(wrapper).on("click", ".remove_child", function (e) { //user click on remove text
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
        if (max_fields > x) {
            add_button.show();
        }
    });
});

// neighbor fields
$(document).ready(function () {
    var max_fields = 5; //maximum input boxes allowed
    var wrapper = $(".neighbors_fields_wrap"); //Fields wrapper
    var add_button = $(".add_neighbor_button"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function (e) { //on add input button click
        e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="inputplus"><input type="text" class="form-control" placeholder="Enter Neighbors\' Name" name="neighbor[]"/> <a href="#" class="remove_neighbor fa fa-minus-circle text-danger"></a></div>'); //add input box
        } else {
            add_button.hide();
        }
    });

    $(wrapper).on("click", ".remove_neighbor", function (e) { //user click on remove text
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
        if (max_fields > x) {
            add_button.show();
        }
    });
});

// check KP Form
jQuery(document).ready(function(){
    jQuery("select.kpselect").on('change',function(){
        jQuery('.kpdivs').slideUp(300);
        jQuery("#"+$(this).val()).slideDown(600);
    });
});

// complainant fields
$(document).ready(function () {
    var max_fields = 5; //maximum input boxes allowed
    var wrapper = $(".complainant_fields_wrap"); //Fields wrapper
    var add_button = $(".add_complainant_button"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function (e) { //on add input button click
        e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="inputplus"><input type="text" class="form-control" placeholder="Enter Complainant Name" name="complainant[]"/> <a href="#" class="remove_complainant fa fa-minus-circle text-danger"></a></div>'); //add input box
        } else {
            add_button.hide();
        }
    });

    $(wrapper).on("click", ".remove_complainant", function (e) { //user click on remove text
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
        if (max_fields > x) {
            add_button.show();
        }
    });
});

// respondent fields
$(document).ready(function () {
    var max_fields = 5; //maximum input boxes allowed
    var wrapper = $(".respondent_fields_wrap"); //Fields wrapper
    var add_button = $(".add_respondent_button"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function (e) { //on add input button click
        e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="inputplus"><input type="text" class="form-control" placeholder="Enter Respondent Name" name="respondent[]"/> <a href="#" class="remove_respondent fa fa-minus-circle text-danger"></a></div>'); //add input box
        } else {
            add_button.hide();
        }
    });

    $(wrapper).on("click", ".remove_respondent", function (e) { //user click on remove text
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
        if (max_fields > x) {
            add_button.show();
        }
    });
});