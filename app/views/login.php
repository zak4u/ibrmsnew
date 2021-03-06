<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Log in | IBRMS</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="template/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="template/bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="template/bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="template/dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="template/plugins/iCheck/square/blue.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


        <style type="text/css">
            #topstrip{
                background: #3c8dbc;
                border-bottom: 1px solid #d8d8d8;
                box-shadow: 0px 0px 3px #ccc;
                padding: 10px;
                font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;
                font-size: 10px;
                color: #ffffff;
                text-transform: uppercase;
            }
            #topstrip a{
                text-decoration: none;
                color: #ffffff;
            }
        </style>
    </head>

    <body class="hold-transition login-page">
        <div id="topstrip"><a href="http://bytelogiq.com/" target="_blank">BYTELOGIQ Software Solutions</a></div>
        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>IBRMS</b>Admin</a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <?php
                if (isset($_SESSION['msg']))
                    echo '<p class="login-box-msg bg-red">' . $_SESSION['msg'] . '</p>';
                unset($_SESSION['msg']);
                ?>
                <p class="login-box-msg">Please enter your log in details</p>

                <form action="<?php echo base_url('login/check_login'); ?>" method="post" name="loginform" class="validate_form">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Username" name="login_name">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="login_password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>

                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>



                <a href="#">I forgot my password</a><br>


            </div>
            <!-- /.login-box-body -->
            <div class="text-center" style="text-align: center; color: #919191"><br/>&copy; Integrated Barangay Records Management System<br/>For Barangay Zone 2, Cadiz City, Neg. Occ.<br/>Developed
                by ByteLogiq<br/>Ver. 1.0</div>
        </div>
        <!-- /.login-box -->

        <!-- jQuery 3 -->
        <script src="template/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="template/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
        <script type="text/javascript">

            jQuery(document).ready(function () {
                jQuery('form[name="loginform"]').attr("onsubmit", "return check_login(this)");
            });
            function check_login(theform) {
                var why = '';
                if (theform.login_name.value == '') {
                    why += "- Username should not be empty\n";
                }
                if (theform.login_password.value == '') {
                    why += "- Password should not be empty\n";
                }
                if (why != "") {
                    alert(why);
                    return false;
                }
            }

        </script>
    </body>

</html>