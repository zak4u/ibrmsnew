<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
<title>Dashboard | IBRMS</title>

<!-- Head Include -->
<?php $this->load->view('layouts/head-include'); ?>
<!-- /.Head Include -->

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper"> 
  
  <!-- Main Header -->
  <header class="main-header"> 
    
    <!-- Logo --> 
    <a href="#" class="logo"> 
    <!-- mini logo for sidebar mini 50x50 pixels --> 
    <span class="logo-mini"><b>IBRMS</b></span> 
    <!-- logo for regular state and mobile devices --> 
    <span class="logo-lg"><b>IBRMS</b>Admin</span> </a> 
    
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation"> 
      <!-- Sidebar toggle button--> 
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> <span class="sr-only">Toggle navigation</span> </a> 
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu"> 
            <!-- Menu Toggle Button --> 
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
            <!-- The user image in the navbar--> 
            <img src="<?php echo base_url(); ?>template/sourcefiles/images/resident/lyndon-astorga-200.jpg" class="user-image" alt="User Image"> 
            <!-- hidden-xs hides the username on small devices so only the image appears. --> 
            <span class="hidden-xs">Lyndon Astorga</span> </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header"> <img src="<?php echo base_url(); ?>template/sourcefiles/images/resident/lyndon-astorga-200.jpg" class="img-circle" alt="User Image">
                <p> Lyndon Astorga - Clerk <small>Member since Nov. 2012</small> </p>
              </li>
              <!-- Menu Body --> 
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right"> <a href="#" class="btn btn-default btn-flat">Sign out</a> </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar"> 
    
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar"> 
      
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="image"> <img src="<?php echo base_url(); ?>template/sourcefiles/images/brgy2-logo-trans.png" class="img-circle" alt="Logo Image"> </div>
        <div class="info">
          <p>Brgy. Zone II</p>
          <!-- Status --> 
          
        </div>
      </div>
      
      <!-- Sidebar Menu -->
      <?php $this->load->view('layouts/sidebar-menu'); ?>
      <!-- /.sidebar-menu --> 
    </section>
    <!-- /.sidebar --> 
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><?php echo $pagename; ?> <small><?php echo $pagesubname; ?></small> </h1>
    </section>
    
    <!-- Main content -->
    <section class="content container-fluid"> 
      
      <!--------------------------
                    | Your Page Content Here |
                    -------------------------->
      
      <?php $this->load->view($main_content); ?>
      
      <!-- page content ends here --> 
    </section>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper --> 
  
  <!-- Main Footer -->
  <footer class="main-footer">
  <!-- To the right -->
  <div class="pull-right text-right">Copyright &copy; 2017 <a href="#">???</a>.</strong> All rights reserved.<br>
    Ver. 1.0</div>
  <!-- Default to the left --> 
  Integrated Barangay Records Management System<br>
  For Brgy. Zone 2, Cadiz City, Neg. Occ. </div>
<!-- ./wrapper --> 

<!-- REQUIRED JS SCRIPTS --> 

<!-- Foot Include -->
<?php $this->load->view('layouts/foot-include'); ?>
<!-- /.Foot Include -->
</body>
</html>