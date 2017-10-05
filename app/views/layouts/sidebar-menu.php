<ul class="sidebar-menu" id="sidebar-menu" data-widget="tree">
        <li class="header">NAVIGATION</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="<?php echo base_url();?>dashboard"><i class="fa fa-tachometer"></i> <span>Overview</span></a></li>
        <li class="treeview"> <a href="#"><i class="fa fa-address-card"></i> <span>Residents</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>residents">Manage Residents</a></li>
            <li><a href="<?php echo base_url();?>residents/reports">Reports</a></li>
          </ul>
        </li>
        <li class="treeview"><a href="#"><i class="fa fa-print"></i> <span>Issue Clearance</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>clearance/clearance_resident">Resident Clearance</a></li>
            <li><a href="<?php echo base_url();?>clearance/clearance_business">Business Clearance</a></li>
            <li><a href="<?php echo base_url();?>clearance/clearance_reports">Reports</a></li>
          </ul>
        </li>
        <li class="treeview"><a href="#"><i class="fa fa-balance-scale"></i> <span>Judicial Cases</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>judicial">Manage Judicial Cases</a></li>
            <li><a href="<?php echo base_url();?>judicial/reports">Reports</a></li>
          </ul>
        </li>
        <li class="treeview"><a href="#"><i class="fa fa-plus-square"></i> <span>Medical/Healthcare</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>#">Manage Medical Cases</a></li>
            <li><a href="<?php echo base_url();?>#">Reports</a></li>
          </ul>
        </li>
        <li class="treeview"><a href="#"><i class="fa fa-bullhorn"></i> <span>Disaster Risk Reduction</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>#">Manage Disaster Cases</a></li>
            <li><a href="<?php echo base_url();?>#">Reports</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-copy"></i> <span>Barangay Forms</span></a> </li>
        <li><a href="#"><i class="fa fa-calendar"></i> <span>Events Calendar</span></a> </li>
        <li class="header">SETTINGS</li>
        <li><a href="<?php echo base_url();?>users"><i class="fa fa-users"></i> <span>Users</span></a></li>
        <li><a href="#"><i class="fa fa-building"></i> <span>Brgy Profile</span></a></li>
        <li><a href="#"><i class="fa fa-building-o"></i> <span>Purok</span></a></li>
        <li><a href="#"><i class="fa fa-save"></i> <span>Backups</span></a></li>
        <li><a href="#"><i class="fa fa-archive"></i> <span>Logs</span></a></li>
      </ul>