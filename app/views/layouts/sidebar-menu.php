<ul class="sidebar-menu" id="sidebar-menu" data-widget="tree">
    <li class="header">NAVIGATION</li>
    <!-- Optionally, you can add icons to the links -->
    <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-tachometer"></i> <span>Overview</span></a></li>
    <li class="treeview"> <a href="#"><i class="fa fa-address-card"></i> <span>Residents</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>residents">Manage Residents</a></li>
            <li><a href="<?php echo base_url(); ?>household">Manage Household</a></li>
            <li><a href="<?php echo base_url(); ?>residents/resident_reports">Reports</a></li>
        </ul>
    </li>
    
    <li class="treeview"><a href="#"><i class="fa fa-print"></i> <span>Clearances</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>clearance/clearance_resident">Resident Clearance</a></li>
            <li><a href="<?php echo base_url(); ?>clearance/clearance_business">Business Clearance</a></li>
            <li><a href="<?php echo base_url(); ?>clearance/clearance_reports">Reports</a></li>
        </ul>
    </li>
    <li class="treeview"><a href="#"><i class="fa fa-balance-scale"></i> <span>Judicial Cases</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>judicial">Manage Judicial Cases</a></li>
            <li><a href="<?php echo base_url(); ?>judicial/judicial_reports">Reports</a></li>
        </ul>
    </li>
    <li class="treeview"><a href="#"><i class="fa fa-plus-square"></i> <span>Medical/Healthcare</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>medical">Manage Medical Cases</a></li>
            <li><a href="<?php echo base_url(); ?>medical/medical_reports">Reports</a></li>
        </ul>
    </li>
    <li class="treeview"><a href="#"><i class="fa fa-bullhorn"></i> <span>Disaster Risk Reduction</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>disaster">Manage Disaster Cases</a></li>
            <li><a href="<?php echo base_url(); ?>disaster/disaster_reports">Reports</a></li>
        </ul>
    </li>
    <li><a href="<?php echo base_url(); ?>forms"><i class="fa fa-copy"></i> <span>Barangay Forms</span></a> </li>
    <li><a href="<?php echo base_url(); ?>calendar"><i class="fa fa-calendar"></i> <span>Events Calendar</span></a> </li>
    <li class="header">SETTINGS</li>
    <li><a href="<?php echo base_url(); ?>users"><i class="fa fa-users"></i> <span>Users</span></a></li>
    <li class="treeview"><a href="#"><i class="fa fa-building"></i> <span>Barangay Profile</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>brgy">Barangay</a></li>
            <li><a href="<?php echo base_url(); ?>purok">Purok</a></li>
            <li class="hideOnload"><a href="<?php echo base_url(); ?>sitio">Sitio</a></li>
        </ul>
    </li>
    <li><a href="<?php echo base_url(); ?>backups"><i class="fa fa-save"></i> <span>Backups</span></a></li>
    <li><a href="<?php echo base_url(); ?>logs"><i class="fa fa-archive"></i> <span>Logs</span></a></li>
    <li class="header">SOFTWARE</li>
    <li><a href="<?php echo base_url(); ?>software"><i class="fa fa-cube"></i> <span>Software Details</span></a></li>
</ul>
