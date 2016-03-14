<?php
require_once('../init.php');
require_once('header.php');
 ?>
<html>
  主机：<?php echo DB_HOST ?><p>
  用户名：<?php echo DB_USER ?><p>
  密码：<?php echo DB_PASSWD ?><p>
  数据库：<?php echo DB_NAME ?><p>
  网站根目录：<?php echo RWEB_ROOT ?><p>
  管理员用户名：<?php echo USER ?><p>
  管理员密码：<?php echo PASSWD ?><p>
<form action="setup.php" method="post">
<input type="submit" name="install" value="安装">
</form>
</html>
