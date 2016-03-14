<?php
 /**
 * 首页
 */
require_once('init.php');

if(!file_exists(RWEB_ROOT.'/include/lib/install.lock')) {
  echo "<script>location.href='./install'</script>";
  exit;
} elseif (empty($_SESSION)) {
  echo "<script>location.href='login.php'</script>";
  exit;
}
?>
