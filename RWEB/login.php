<?php

define('RWEB_ROOT',dirname(__FILE__));

require_once('init.php');
require_once View::getView(RWEB_ROOT,'login');
doStripslashes();
if(isset($_POST) && !empty($_POST)) {
  if($_POST['username'] != NULL && $_POST['passwd'] != NULL) {
    echo $_POST['username'];
  } else {
    echo "NULL";
  }
}
 ?>
