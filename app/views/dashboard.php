<div class="row">
  <div class="col-lg-3 col-xs-6"> 
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3>1582</h3>
        <p>Total Residents</p>
      </div>
      <div class="icon"> <i class="ion ion-person-stalker"></i> </div>
      <a href="<?php echo base_url(); ?>residents" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6"> 
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3>162</h3>
        <p>Unresolved Cases</p>
      </div>
      <div class="icon"> <i class="ion ion-social-buffer"></i> </div>
      <a href="<?php echo base_url(); ?>judicial" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6"> 
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3>44</h3>
        <p>Medical Cases</p>
      </div>
      <div class="icon"> <i class="ion ion-medkit"></i> </div>
      <a href="<?php echo base_url(); ?>medical" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6"> 
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3>0</h3>
        <p>Disaster Cases</p>
      </div>
      <div class="icon"> <i class="ion ion-umbrella"></i> </div>
      <a href="<?php echo base_url(); ?>disaster" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>
  </div>
  <!-- ./col --> 
</div>

<!-- calendar-->
<div class="col-md-4">
    <div class="box box-primary ">
    <div class="box-header with-border">
      <h3 class="box-title">Quick Links</h3>
      <div class="box-tools">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
        <a href="<?php echo base_url(); ?>residents/add" class="btn btn-lg btn-block bg-aqua">Add New Resident</a>
        <a href="<?php echo base_url(); ?>clearance/clearance_resident_issue" class="btn btn-lg btn-block bg-green">Issue Resident Clearance</a>
        <a href="<?php echo base_url(); ?>clearance/clearance_business_issue" class="btn btn-lg btn-block bg-teal">Issue Business Clearance</a>
        <a href="#" class="btn btn-lg btn-block bg-yellow">Add Event</a>
      
    </div>
    <!-- /.box-body --> 
  </div>
    
    <!-- system info here -->
    <div class="box box-primary ">
    <div class="box-header with-border">
      <h3 class="box-title">System Information</h3>
      <div class="box-tools">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body text-center">
        <p>IBRMS - Ver. 1.0</p>
        <p>Integrated Barangay Records Management System</p>
        <p>Developed by <a href="http://www.bytelogiq.com/">ByteLogiq</a></p>
        <p>For Brgy. Zone 2, Cadiz City, Neg. Occ.</p>
        
      
    </div>
    <!-- /.box-body --> 
  </div>
    
</div>
<div class="col-md-8">
  <div class="box box-primary ">
    <div class="box-header with-border">
      <h3 class="box-title">Events Calendar</h3>
      <div class="box-tools">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body no-padding"> 
      <!-- THE CALENDAR -->
      <div id="calendar"></div>
    </div>
    <!-- /.box-body --> 
  </div>
  <!-- /. box --> 
  
</div>
<br class="clearboth"/>

<div class="col-md-6"> 
  <!-- LINE CHART -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Cases Chart</h3>
      <div class="box-tools pull-left">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body chart-responsive">
      <div class="chart" id="line-chart-cases" style="height: 300px;"></div>
    </div>
    <!-- /.box-body --> 
  </div>
  <!-- /.box --> 
  
</div>
<div class="col-md-6"> 
  <!-- LINE CHART -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Medical Chart</h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body chart-responsive">
      <div class="chart" id="line-chart-medical" style="height: 300px;"></div>
    </div>
    <!-- /.box-body --> 
  </div>
  <!-- /.box --> 
</div>
<br class="clearboth"/>
<br/>
<br/>

