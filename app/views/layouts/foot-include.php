<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


<!-- typeahead -->
<script src="<?php echo base_url(); ?>template/plugins/bootstrap-3-typeahead/bootstrap3-typeahead.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url(); ?>template/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- Morris.js charts -->
<script src="<?php echo base_url(); ?>template/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>template/bower_components/morris.js/morris.min.js"></script>

<!-- date-range-picker -->
<script src="<?php echo base_url(); ?>template/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>template/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url(); ?>template/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url(); ?>template/plugins/timepicker/bootstrap-timepicker.min.js"></script>

<!-- InputMask -->
<script src="<?php echo base_url(); ?>template/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>template/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>template/plugins/input-mask/jquery.inputmask.extensions.js"></script>

<!-- Select2 -->
<script src="<?php echo base_url(); ?>template/bower_components/select2/dist/js/select2.full.min.js"></script>

<!-- fullCalendar -->
<script src="<?php echo base_url(); ?>template/bower_components/moment/moment.js"></script>
<script src="<?php echo base_url(); ?>template/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>



<!-- typesearch -->
<script src="<?php echo base_url(); ?>template/sourcefiles/js/typesearch.js"></script>

 


<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>template/dist/js/adminlte.min.js"></script>


<script src="<?php echo base_url(); ?>template/sourcefiles/js/custom.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
                Both of these plugins are recommended to enhance the
                user experience. -->


<script type="text/javascript">
//logout after some time
    function getlogout() {
        alert('Session Ended! You have been logged out from the system!');
        window.location = '<?php echo base_url(); ?>';
        session_destroy();
    }
    //setTimeout(getlogout, 600000);
</script>