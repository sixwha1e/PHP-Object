<?php



define('CONFIG_PATH',dirname(__FILE__));//配置文件路径


/**
 * 基础函数库
**/

function __autoload($class) {
	$class = strtolower($class);
	if (file_exists(RWEB_ROOT . '/include/lib/' . $class . '.php')) {
		require_once(RWEB_ROOT . '/include/lib/' . $class . '.php');
	}
}

/**
 * 去除多余的转义字符
**/
function doStripslashes() {
	if (get_magic_quotes_gpc()) {
		$_GET = stripslashesDeep($_GET);
		$_POST = stripslashesDeep($_POST);
		$_COOKIE = stripslashesDeep($_COOKIE);
		$_REQUEST = stripslashesDeep($_REQUEST);
	}
}

/**
 *　验证登录用户信息
**/

function getUserDataByLogin($DB){
  $sql = "SELECT * FROM user WHERE username = '".$_POST['username']."';";
  $result = $DB->query($sql);
  if ($row = mysql_fetch_assoc($result)) {
    if ($row['password'] === md5($_POST['passwd'])) {
      msgEcho('登陆成功');
    } else {
      msgEcho('用户名或者密码错误');
    }
  }else {
  msgEcho('不存在该用户');
  }
}


/**
 * 提示输出
**/
function msgEcho($msg) {
	echo "<script>alert('".$msg."');</script>";
}
 ?>
