<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DLNU CTF</title>

    <!-- Bootstrap core CSS -->
    <link href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/PHP-Object/Public/login.css" rel="stylesheet">
    <link href="/PHP-Object/Public/adminlte/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="http://v3.bootcss.com/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">

      <form class="form-signin" action="/PHP-Object/index.php/Home/Login/register" method="post">
        <h1 class="form-signin-heading text-muted text-center">REGISTER</h1>
        <div class="form-group has-feedback">
            <input type="text" name="username" id="inputName" class="form-control" placeholder="真实姓名" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="text" name="nickname" id="inputNick" class="form-control" placeholder="昵称" required>
            <span class="glyphicon glyphicon-leaf form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="密码" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" name="repassword" id="inputRepasswd" class="form-control" placeholder="确认密码" required>
            <span class="glyphicon glyphicon-check form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="邮箱" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="checkbox icheck"><label><input type="checkbox" name="agree" value="1"><a href="#">我同意比赛协议</a></label></div>
          </div>
        <div class="col-md-8"><a class="btn btn-primary btn-block" href="<?php echo U('Login/login');?>" role="button">已注册,去登陆</a></div>
        <div class="col-md-4"><button type="submit" class="btn btn-default">点击注册</button></div>
      </div>
      </form>

    </div> <!-- /container -->

    <!-- jQuery 2.1.4 -->
    <script src="/PHP-Object/Public/adminlte/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/PHP-Object/Public/adminlte/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="/PHP-Object/Public/adminlte/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
  </body>
</html>