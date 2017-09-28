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
        {y: '2017 Q4', item1: 0},
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
        {y: '2017 Q4', item1: 15073},
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
    })
})

//iCheck for checkbox and radio inputs
jQuery('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
  checkboxClass: 'icheckbox_minimal-blue',
  radioClass   : 'iradio_minimal-blue'
})
//datepicker
jQuery('.datepicker').datepicker({
  autoclose: true
})

//data mask
jQuery('[data-mask]').inputmask()

//select2 multiple
jQuery('.select2').select2()

//disable all fields
jQuery('.disableflds *').attr("disabled","disabled");

// tooltip
jQuery(function () {
  jQuery('[data-toggle="tooltip"]').tooltip()
})



// validations
jQuery(document).ready(function(){
    jQuery('.deletebtn').click(function(){
        confirm("Are you sure you want to delete this record?");
    });
})