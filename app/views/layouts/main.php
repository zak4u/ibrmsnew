<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Manila');

$session_data = $this->session->userdata('logged_in');


if($session_data['is_logged_in']!=1){
        $redirectURL = base_url().'login';
        header("Location:  $redirectURL"); /* Redirect browser */
        session_destroy();
        exit();
    }

   
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
<title><?php echo $pagename.' '.$pagesubname ?> | IBRMS</title>
<!-- page specific HEAD -->
<?php $this->load->view($head_content); ?>
<!-- page specific HEAD end -->
<!-- Head Include -->
<?php $this->load->view('layouts/head-include'); ?>
<!-- /.Head Include -->

</head>

<body class="hold-transition skin-blue sidebar-mini <?php echo $session_data['user_role']; ?> <?php echo $this->uri->segment(1); ?> <?php echo $this->uri->segment(2); ?>">
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
            <span class="userstatus"></span>
            <!-- hidden-xs hides the username on small devices so only the image appears. --> 
            <span class="hidden-xs"><?php echo $session_data['user_firstname'].' '.$session_data['user_lastname'];?></span> </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <p><?php echo $session_data['user_firstname'].' '.$session_data['user_lastname'].' - '.$session_data['user_role']; ?>
                    <small>Member since <?php echo date('M Y',$session_data['user_created']); ?></small> </p>
              </li>
              <!-- Menu Body --> 
              
              
            </ul>
          </li>
          <li><a href="<?php echo base_url('logout'); ?>" class="btn btn-flat"><i class="fa fa-sign-out"></i>Sign out</a></li>
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
  <div class="pull-right text-right">Copyright &copy; 2017 <a href="http://www.bytelogiq.com/">ByteLogiq</a>.</strong> All rights reserved.<br>
    Ver. 1.0</div>
  <!-- Default to the left --> 
  Integrated Barangay Records Management System<br>
  For Brgy. Zone 2, Cadiz City, Neg. Occ. </div>
<!-- ./wrapper --> 

<!-- REQUIRED JS SCRIPTS --> 

<!-- Foot Include -->
<?php $this->load->view('layouts/foot-include'); ?>
<!-- page specific FOOT -->
<?php $this->load->view($foot_content); ?>
<!-- page specific FOOT end -->
<!-- /.Foot Include -->
</body>
</html>