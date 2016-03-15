<?php
/**
 * 登录页
**/


define('RWEB_ROOT',dirname(__FILE__));

require_once('init.php');
require_once View::getView(RWEB_ROOT,'login');
doStripslashes();
if(isset($_POST) && !empty($_POST)) {
  if($_POST['username'] != NULL && $_POST['passwd'] != NULL) {
    getUserDataByLogin($DB);
    session_start();
  } else {
    msgEcho("用户名或者密码为空！");
  }
}

 ?>
