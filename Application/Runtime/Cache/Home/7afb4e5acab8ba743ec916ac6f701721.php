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
  <title>大连民族大学</title>

  <!-- Bootstrap core CSS -->
  <link href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/PHP-Object/Public/cover.css" rel="stylesheet">

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

    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"></h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li><a href="<?php echo U('Subject/subjectlist?type=web');?>">题目</a></li>
                  <li class="active"><a href="<?php echo U('Users/myself');?>">关于我</a></li>
                  <li><a href="<?php echo U('Users/rank?p=1');?>">比赛排名</a></li>
                  <li><a href="<?php echo U('Users/report');?>">公示</a></li>
                  <li><a href="<?php echo U('Login/logout');?>">退出</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="mastbody">
            <div class="row">
              <div class="col-md-6">
                <img class="img-circle" src="/PHP-Object/Public/images/face.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2><?php echo I('session.nickname');?></h2>
                <p><a class="btn btn-default" href="<?php echo U('Users/myself');?>" role="button"><span class="glyphicon glyphicon-refresh"></span> 刷新</a></p>
              </div><!-- /.col-md-6 -->
              <div class="col-md-6">
                <h4 class="text-left"><span class="glyphicon glyphicon-user"></span>&nbspNAME:&nbsp&nbsp&nbsp<?php echo I('session.username');?></h4></br>
                <h4 class="text-left"><span class="glyphicon glyphicon-envelope"></span>&nbspEMAIL:&nbsp&nbsp&nbsp<?php echo I('session.email');?></h4></br>
                <h4 class="text-left"><span class="glyphicon glyphicon-check"></span>&nbspSCORE:&nbsp&nbsp&nbsp<?php echo ($my['allscore']); ?></h4></br>
                <h4 class="text-left"><span class="glyphicon glyphicon-tent"></span>&nbspLOGIN NUM:&nbsp&nbsp&nbsp<?php echo I('session.loginnum');?> 次</h4></br>
                <h4 class="text-left"><span class="glyphicon glyphicon-sort"></span>&nbspSUBMIT NUM:&nbsp&nbsp&nbsp<?php echo ($my['submitnum']); ?> 次</h4></br>

                <h4 class="text-left"><span class="glyphicon glyphicon-bell"></span>&nbspHASH:&nbsp&nbsp&nbsp<u><?php echo I('session.password');?></u> （务必记住!!!）</h4>
              </div><!-- /.col-md-6 -->
            </div>
          </div>
          <div class="mastfoot">
            <div class="inner">
  <p>Cover template for <a href="http://getbootstrap.com" target="_blank">Bootstrap</a>, by <a href="https://sixwha1e.github.io" target="_blank">@sixwhale</a>.</p>
</div>

          </div>

        </div>

      </div>


    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script>
    (function () {
      'use strict';

      if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
        var msViewportStyle = document.createElement('style')
        msViewportStyle.appendChild(
          document.createTextNode(
            '@-ms-viewport{width:auto!important}'
          )
        )
        document.querySelector('head').appendChild(msViewportStyle)
      }

    })();

    </script>
  </body>
</html>