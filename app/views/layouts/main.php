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
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard | IBRMS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url();?>template/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>template/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>template/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>template/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="<?php echo base_url();?>template/dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

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
                <img src="<?php echo base_url();?>template/sourcefiles/images/resident/lyndon-astorga-200.jpg" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">Lyndon Astorga</span> </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header"> <img src="<?php echo base_url();?>template/sourcefiles/images/resident/lyndon-astorga-200.jpg" class="img-circle" alt="User Image">
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
          <div class="image"> <img src="<?php echo base_url();?>template/sourcefiles/images/brgy2-logo-trans.png" class="img-circle" alt="Logo Image"> </div>
          <div class="info">
            <p>Brgy. Zone II</p>
            <!-- Status -->

          </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
          </span> </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">NAVIGATION</li>
          <!-- Optionally, you can add icons to the links -->
          <li class="active"><a href="<?php echo base_url();?>dashboard"><i class="fa fa-link"></i> <span>Overview</span></a></li>

          <li class="treeview"> <a href="#"><i class="fa fa-link"></i> <span>Residents</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url();?>residents">View All Residents</a></li>
              <li><a href="<?php echo base_url();?>residents/clearance">Clearance</a></li>
              <li><a href="#">add edit delete</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-link"></i> <span>Cases</span></a></li>
          <li><a href="#"><i class="fa fa-link"></i> <span>Medical</span></a></li>
          <li><a href="#"><i class="fa fa-link"></i> <span>DRRMC</span></a></li>
          <li><a href="#"><i class="fa fa-link"></i> <span>Reports</span></a></li>
          <li><a href="#"><i class="fa fa-link"></i> <span>Forms</span></a></li>
          <li><a href="#"><i class="fa fa-link"></i> <span>Calendar</span></a></li>
          <li class="header">SETTINGS</li>
          <li><a href="#"><i class="fa fa-link"></i> <span>Users</span></a></li>
          <li><a href="#"><i class="fa fa-link"></i> <span>Brgy Profile</span></a></li>
          <li><a href="#"><i class="fa fa-link"></i> <span>Purok</span></a></li>
          <li><a href="#"><i class="fa fa-link"></i> <span>Backups</span></a></li>
          <li><a href="#"><i class="fa fa-link"></i> <span>Logs</span></a></li>

        </ul>
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
      <div class="pull-right text-right">Copyright &copy; 2017 <a href="#">???</a>.</strong> All rights reserved.<br>Ver. 1.0</div>
      <!-- Default to the left -->
      Integrated Barangay Records Management System<br> For Brgy. Zone 2, Cadiz City, Neg. Occ.


  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED JS SCRIPTS -->

  <!-- jQuery 3 -->
  <script src="<?php echo base_url();?>template/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url();?>template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
<script src="<?php echo base_url();?>template/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url();?>template/bower_components/morris.js/morris.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url();?>template/dist/js/adminlte.min.js"></script>
  <script src="<?php echo base_url();?>template/sourcefiles/js/custom.js"></script>

  <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>

</html>