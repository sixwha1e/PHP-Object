<?php
/**
 * 登录验证
 **/

 class LoginAuth() {

   /**
   * 验证用户是否处于登录状态
   */
   public static function isLogin() {

   }

   /**
   * 验证密码/用户
   */
/*
   public static function checkUser($username,$password) {
     session_start();
     if(trim($username) == '' || trim($password) == '') {
       return false;
     } elseif (condition) {
       # code...
     }
   }
*/
   /**
    * 从数据库中查询用户信息
    */

    public static function getUserDataByLogin() {
      $db = MySql::getInstance();
      $userData = "SELECT passwd FROM user WHERE username = ".$username.";";
      $result = mysql_query();
    }
 }
 ?>
