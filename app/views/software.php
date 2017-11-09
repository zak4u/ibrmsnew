<?php
function GetVolumeLabel($drive) {
if (preg_match('#Volume Serial Number is (.*)\n#i', shell_exec('dir '.$drive.':'), $m)) {
$volname = ' ('.$m[1].')';
} else {
$volname = '';
}
return $volname;
}
$serial = str_replace("(","",str_replace(")","",GetVolumeLabel("c")));
echo $serial;
echo '<br>';
echo sha1($serial);
?>
<br/><br/>
<form>
  <div class="row">
    <div class="col-lg-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Software Details</h3>
        </div>
        <!-- left -->
        <div class="col-lg-6">
          <div class="box-body">
            <div class="form-group">
              <p><strong>Name:</strong> IBRMS (Integrated Barangay Records Management System)</p>
              <p><strong>Version:</strong> 1.0</p>
              <p><strong>Developer:</strong> ByteLogiq Software Solutions&nbsp;&nbsp;&nbsp;<a href="#" target="_blank" title="Email" data-toggle="tooltip" data-placement="top"><i class="fa fa-envelope"></i></a> <a href="#" target="_blank"title="Facebook" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook"></i></a> <a href="http://www.bytelogiq.com/" target="_blank" title="Website" data-toggle="tooltip" data-placement="top"><i class="fa fa-chrome"></i></a></p>
              <br/>
              <p><strong>Client:</strong> Brgy. Zone 2</p>
              <p><strong>Address:</strong> Cadiz City, Neg. Occ.</p>
            </div>
            
            <!-- /.form-group --> 
          </div>
        </div>
        <!-- left END --> 
        
        <!-- right -->
        
        <div class="col-lg-6">
          <div class="box-body">
            <div class="form-group">
              <p><strong>Software:</strong> <span class="btn-success btn-flat btn-padded">Activated</span> <span class="btn-warning btn-flat btn-padded">Trial</span> <span class="btn-danger btn-flat btn-padded">Expired</span></p>
              <p><strong>License:</strong> <span class="btn-vk btn-flat btn-padded">hY#7xg#?yKw#EXV#52RB#6Vqu</span></p>
            </div>
            <div class="form-group">
              <div class="col-lg-8 no-pad-left">
                <label for="FirstName">Enter License Key <span class="req">*</span></label>
                <input type="text" class="form-control" value="hY#7xg#?yKw#EXV#52RB#6Vqu" />
              </div>
              <div class="col-lg-4">
                <div>&nbsp;</div>
                <input type="submit" value="Update License" class="btn btn-success" />
              </div>
              <div class="clearBoth"></div>
            </div>
            <div class="clearBoth"></div>
            <!-- /.form-group --> 
          </div>
        </div>
        <!-- right END -->
        
        <div class="clearBoth"></div>
      </div>
    </div>
  </div>
</form>
