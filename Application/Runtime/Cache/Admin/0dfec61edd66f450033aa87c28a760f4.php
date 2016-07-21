<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
<title>DLNU CTF ADMIN PAGE</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.4 -->
<link href="/PHP-Object/Public/adminlte/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Font Awesome Icons -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Ionicons -->
<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
<!-- DATA TABLES -->
<link href="/PHP-Object/Public/adminlte/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="/PHP-Object/Public/adminlte/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link href="/PHP-Object/Public/adminlte/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="/PHP-Object/Public/adminlte/index2.html"><b>DLNU CTF</b> MANAGE</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">DLNU CTF MANAGE LOGIN PAGE</p>
        <form action="<?php echo U('Login/login');?>" method="post">
          <div class="form-group has-feedback">
            <input type="text" name="aname" class="form-control" placeholder="Admin" required/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="apassword" class="form-control" placeholder="Password" required/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8"></div>
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
            </div><!-- /.col -->
          </div>
        </form>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <!-- jQuery 2.1.4 -->
<script src="/PHP-Object/Public/adminlte/plugins/jQuery/jQuery-2.2.0.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="/PHP-Object/Public/adminlte/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- DATA TABES SCRIPT -->
<script src="/PHP-Object/Public/adminlte/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="/PHP-Object/Public/adminlte/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="/PHP-Object/Public/adminlte/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src="/PHP-Object/Public/adminlte/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>

<script src="/PHP-Object/Public/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
<script src="/PHP-Object/Public/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>


<!-- AdminLTE App -->
<script src="/PHP-Object/Public/adminlte/dist/js/app.min.js" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="/PHP-Object/Public/adminlte/dist/js/demo.js" type="text/javascript"></script>
<!-- page script -->

  </body>
</html>