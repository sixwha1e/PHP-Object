<?php
$step = $_GET['step'] != ''?$_GET['step']:1;

switch ($step) {
  case '1':
    require_once('step1.php');
    break;
  case '2':
    require_once('step2.php');
    break;
  case '3':
    require_once('step3.php');
    break;
  default:
    echo "nothing";
    break;
}

?>
