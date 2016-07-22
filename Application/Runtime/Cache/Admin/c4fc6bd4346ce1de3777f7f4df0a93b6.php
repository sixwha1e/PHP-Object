<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
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
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">
        <header class="main-header">
  <!-- Logo -->
  <a href="../../index2.html" class="logo">
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Admin</b>Page</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Notifications: style can be found in dropdown.less -->
        <li class="dropdown notifications-menu">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="/PHP-Object/Public/adminlte/dist/img/user2-160x160.jpg" class="user-image" alt="User Image" />
            <span class="hidden-xs"><?php echo session('aname');?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="/PHP-Object/Public/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
              <p>
                <?php echo session('aname');?> - 超级管理员
                <small>Member since Nov. 2016</small>
              </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="<?php echo U('Index/index');?>" class="btn btn-default btn-flat">首页</a>
              </div>
              <div class="pull-right">
                <a href="<?php echo U('Login/logout');?>" class="btn btn-default btn-flat">注销</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>

      </header>
      <aside class="main-sidebar">
        <aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
<!-- Sidebar user panel -->
<div class="user-panel">
  <div class="pull-left image">
    <img src="/PHP-Object/Public/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
  </div>
  <div class="pull-left info">
    <p><?php echo session('aname');?></p>

    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
  </div>
</div>

<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu">
  <li class="header">主导航</li>
  <li><a href="<?php echo U('Index/index');?>"><i class="fa fa-home"></i><span>首页</span></a></li>
  <li><a href="<?php echo U('Users/index');?>"><i class="fa fa-users"></i><span>用户管理</span></a></li>
  <li><a href="<?php echo U('Users/rank');?>"><i class="fa fa-list-ol"></i><span>排名</span></a></li>
  <li><a href="<?php echo U('Users/status');?>"><i class="fa fa-book"></i><span>题目情况</span></a></li>
  <li class="treeview">
  <a href="#">
      <i class="fa fa-cutlery"></i>
      <span>x</span>
      <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="treeview-menu">
      <li><a href="#"><i class="fa fa-circle-o"></i>a</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i>b</a></li>
  </ul>
</ul>
</section>
<!-- /.sidebar -->

</aside>

      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            答题状态
            <small>welcome to the admin page</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="box">
            <div class="box-header"></div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">ID</th>
                    <th>Subject</th>
                    <th>Score</th>
                    <th>Flag</th>
                    <th>Status</th>
                    <th>Progress</th>
                    <th>Label</th>
                    <th>First Blood</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__FOR_START_349062346__=0;$__FOR_END_349062346__=$n;for($i=$__FOR_START_349062346__;$i < $__FOR_END_349062346__;$i+=1){ ?><tr>
                      <td><?php echo ($i + 1); ?></td>
                      <td><?php echo ($r[$i]['type']); ?></td>
                      <td><?php echo ($r[$i]['score']); ?></td>
                      <td><?php echo ($r[$i]['flag']); ?></td>
                      <td><span class="label label-warning">Progress</span></td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-success" style="width: 55%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-green">55%</span></td>
                      <td><?php echo ($r[$i]['firstblood']); ?></td>
                  </tr><?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      

      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
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

<script type="text/javascript">
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
  </body>
</html>