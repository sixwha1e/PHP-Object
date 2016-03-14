<?php

/**
 * 视图类
**/
define('CONFIG_PATH',dirname(__FILE__));//配置文件路径

class View {
  public static function getView($path , $template, $ext = '.php') {
    return $path."/views/".$template.$ext;
  }

}

?>
