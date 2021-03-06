<script type="text/javascript">
    jQuery("html").addClass("printpreview");
</script>
<?php
if ($lists) {
    foreach ($lists as $list) {
        ?>
        <?php
        if ($brgyprof) {
            foreach ($brgyprof as $brgy) {
                
            }
        }
        ?>

        <div id="printable"> 
            <!-- -->
            <table width="760" border="0" cellspacing="0" cellpadding="0">
                <tr valign="top">
                    <td><table width="760"  style="text-align:center" border="0" cellspacing="0" cellpadding="0">
                            <tr valign="top">
                                <td width="150"><img src="../../template/sourcefiles/images/brgy2-logo-trans.png" width="120" /></td>
                                <td width="460" style="font-size:16px"><strong>Republic of the Philippines<br/>
                                        Province of <?php echo $brgy->bp_province; ?><br>
                                        City of Cadiz<br>
                                        <?php echo $brgy->bp_name; ?><br>
                                        <br>
                                        <span style="font-size:20px">OFFICE OF THE PUNONG BARANGAY</span> <br>
                                        <br>
                                        <span style="font-size:25px">BARANGAY BUSINESS CLEARANCE</span> <br><small style="font-size: 12px;">Reference No.: <?php echo $list->bc_idnumber; ?></small></strong>

                                    <br>
                                    <br>
                                    <br></td>
                                <td width="150">&nbsp;</td>
                            </tr>
                        </table></td>
                </tr>
                <!-- content start-->
                <tr>
                    <td><table width="700" align="center"  border="0" cellspacing="0" cellpadding="0">
                            <tr valign="top">
                                <td><p><strong>TO WHOM IT MAY CONCERN</strong></p>
                                    <br>
                                    <p>This is to certify <strong><?php echo $list->bc_title; ?> <?php echo $list->bc_name; ?></strong>, a  resident of <strong><?php echo $list->bc_address; ?></strong>, has applied for a Business Clearance for his/her business <strong><?php echo $list->bc_business_name; ?></strong> (<strong><?php echo $list->bc_business_type; ?></strong>) located at <strong><?php echo $list->bc_business_address; ?></strong>.</p>
                                    <br>
                                    <p>This certification is issued upon the request of above named person for<br>
                                        <strong><?php echo $list->bc_purpose; ?></strong>.</p>
                                    <br>
                                    <p>Given this day <strong><?php echo $list->bc_issued; ?></strong>  at the Office of <?php echo $brgy->bp_name; ?>, <?php echo $brgy->bp_city; ?>, <?php echo $brgy->bp_province; ?>, <?php echo $brgy->bp_region; ?>, Philippines.</p></td>
                            </tr></table>
                    </td>
                </tr>
                <!-- content end-->
                <tr>
                    <td><table width="700" align="center"  border="0" cellspacing="0" cellpadding="0">
                            <tr valign="top">

                                <td><br>
                                    <br>
                                    <br>
                                    <br>
                                    <span style="text-transform: uppercase;">HON. <?php echo $brgy->bp_captain; ?></span><br>
                                    Punong Barangay<br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    NOT VALID WITHOUT BRGY. SEAL<br>
                                    O.R. No.: <strong><?php echo $list->bc_or_number; ?></strong><br>
                                    Validity: <strong><?php echo $list->bc_issued; ?></strong> - <strong><?php echo $list->bc_validity; ?></strong></td></tr></table>
                    </td>
                </tr>
            </table>

            <!-- --> 

        </div>
        <?php
    }
}
?>
