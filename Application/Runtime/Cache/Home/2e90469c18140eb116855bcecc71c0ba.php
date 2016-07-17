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

<link rel="stylesheet" href="/PHP-Object/Public/button.css">
</head>

  <body>

    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="row">
          <div class="col-md-4">
            <a class="button" href="<?php echo U('Users/web');?>">&nbspclick&nbsp &nbspthe &nbsp&nbspweb&nbsp&nbsp</a>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6">
            <button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-target="#questionModal" data-title="misc-100" data-content="XXXXXXXXXXXXX" data-url="http://10.10.10.10">misc-100</button></br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <a class="button" href="<?php echo U('Users/misc');?>">&nbspclick &nbsp&nbspthe &nbspmisc&nbsp&nbsp</a>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6">
            <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#questionModal" data-title="misc-200" data-content="XXXXXXXXXXXX" data-url="http://10.10.10.10">misc-200</button></br>          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <a class="button" href="<?php echo U('Users/code');?>">&nbspclick &nbspthe &nbspcode&nbsp</a>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6">
            <button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-target="#questionModal" data-title="misc-300" data-content="XXXXXXXXXXXX" data-url="http://10.10.10.10">misc-300</button></br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <a class="button" href="<?php echo U('Users/reverse');?>">click the reverse</a>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6">
            <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#questionModal" data-title="mics-500" data-content="XXXXXXXXXXXX" data-url="http://10.10.10.10">misc-500</button></br>
          </div>
        </div>

<!--渐变响应菜单-->
        <div class="modal fade" id="questionModal" tabindex="-1" role="dialog" aria-labelledby="questionModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title text-primary" id="questionModalLabel">New message</h4>
              </div>
              <div class="modal-body">
                <form>
                  <div class="modal-tip text-primary" id="questionModalLabel">content</div>
                  <div class="modal-url text-primary" id="questionModalLabel">url</div>
                  <div class="form-group text-primary">
                  <input type="text" class="form-control" name="flag" placeholder="input the flag"/>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary">提交</button>
              </div>
            </div>
          </div>
        </div>
<!--/渐变响应菜单-->


        <div class="cover-container">
          <div class="masthead clearfix">
  <div class="inner">
    <h3 class="masthead-brand">XXXX</h3>
    <nav>
      <ul class="nav masthead-nav">
        <li class="active"><a href="<?php echo U('Users/web');?>">题目</a></li>
        <li><a href="<?php echo U('Users/myself');?>">关于我</a></li>
        <li><a href="<?php echo U('Users/rank');?>">比赛排名</a></li>
        <li><a href="#">退出</a></li>
      </ul>
    </nav>
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


    $('#questionModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var content = button.data('content')
      var url = button.data('url')
      var recipient = button.data('title') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-title').text(recipient)
      modal.find('.modal-tip').text(content)
      modal.find('.modal-url').text(url)

    })
    </script>
  </body>
</html>