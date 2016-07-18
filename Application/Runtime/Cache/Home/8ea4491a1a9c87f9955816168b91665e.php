<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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

    <link href="http://v3.bootcss.com/examples/dashboard/dashboard.css" rel="stylesheet">
</head>
<div class="site-wrapper">
  <div class="site-wrapper-inner">
    <div class="cover-container">
      <div class="masthead clearfix">
        <div class="inner">
          <h3 class="masthead-brand"></h3>
          <nav>
            <ul class="nav masthead-nav">
              <li><a href="<?php echo U('Subject/subjectlist?type=web');?>">题目</a></li>
              <li><a href="<?php echo U('Users/myself');?>">关于我</a></li>
              <li class="active"><a href="<?php echo U('Users/rank');?>">比赛排名</a></li>
              <li><a href="<?php echo U('Users/report');?>">公示</a></li>
              <li><a href="<?php echo U('Login/logout');?>">退出</a></li>
            </ul>
          </nav>
        </div>
      </div>
    <div class="mastbody">
          <table class="table">
            <thead>
              <tr>
                <th><h4>RANK</h4></th>
                <th><h4>ID</h4></th>
                <th><h4>NAME</h4></th>
                <th><h4>SCORE</h4></th>
              </tr>
            </thead>
            <tbody>
              <?php $__FOR_START_1943536714__=0;$__FOR_END_1943536714__=10;for($i=$__FOR_START_1943536714__;$i < $__FOR_END_1943536714__;$i+=1){ ?><tr>
                  <th scope="row"><?php echo ($i + 1); ?></th>
                  <th>#<?php echo I('session.uid');?></th>
                  <th><?php echo I('session.nickname');?></th>
                  <th>1000</th>
                </tr><?php } ?>
            </tbody>
          </table>
    </div>

        <div class="mastfoot">
          <div class="inner">
  <p>Cover template for <a href="http://getbootstrap.com" target="_blank">Bootstrap</a>, by <a href="https://sixwha1e.github.io" target="_blank">@sixwhale</a>.</p>
</div>

        </div>
    </div>
  </div>
</div>




</div>

<!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://v3.bootcss.com/assets/js/ie10-viewport-bug-workaround.js"></script>
</html>