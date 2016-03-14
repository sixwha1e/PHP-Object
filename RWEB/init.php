<?php
  /**
  * 全局项加载
  */
define('RWEB_ROOT',dirname(__FILE__));

require_once(RWEB_ROOT.'/config.php');
require_once(RWEB_ROOT.'/include/lib/function.base.php');

//require_once(RWEB_ROOT.'/include/lib/mysql.php');
$DB = new MySql(DB_HOST,DB_USER,DB_PASSWD,DB_NAME,USER,PASSWD);
?>
