<?php
require_once('../init.php');
require_once('header.php');
?>
<html>
<div class="warp-content"> <!-- 主体内容 开始 -->
      <div class="info">
        <div class="bor">
         <table border="0" cellspacing="1" cellpadding="4" class="list" name="table1" id="table1" align="center" >
                  <tr>
                    <thead>
                </thead><th width="155">检查项目</th>
                <th>当前环境</th>
                <th>CMS建议</th>
                <th width="100">功能影响</th>
                  </tr>
                  <tbody>
                  <tr>
                    <th>操作系统</th>
                    <td><?php echo php_uname();?></td>
                    <td>Windows_NT/Linux/Freebsd</td>
                    <td><span class="green" >√</span></td>
                  </tr>
                  <tr>
                    <th>WEB 服务器</th>
                    <td><?php echo $_SERVER['SERVER_SOFTWARE'];?></td>
                    <td>Apache/Nginx/IIS</td>
                    <td><span class="green" >√</span></td>
                  </tr>
                  <tr>
                    <th>PHP 版本</th>
                    <td>PHP <?php echo phpversion();?></td>
                    <td>PHP 5.0.0 及以上</td>
                    <td><?php if(phpversion() >= '5.0.0'){ ?><span class="green" >√</span><?php }else{ ?><font class="red">×&nbsp;无法安装</font><?php }?></font></td>
                  </tr>


                  </tbody>
                </table>
        </div>
      </div>
    </div> <!-- 主体内容 结束 -->
</div>
</body>
<form action ="index.php?step=3" method="post">
  <input type="submit" name="sub" value="下一步">
</form>
</html>
