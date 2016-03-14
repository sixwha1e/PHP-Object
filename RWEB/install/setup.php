<?php
  /**
  * 一键式安装
  */
require_once('header.php');

if(isset($_POST['install'])) {
  require_once('../init.php');
  if($DB->createDB()) {
    $DB->isInstall();
    echo "请重新进入RWEB根目录";
  }
}



?>
