<?php
namespace Home\Model;
use Think\Model;

class UsersModel extends Model {

  /**
   * 自动验证
   * self::EXISTS_VALIDATE 或者0 存在字段就验证（默认）
   * self::MUST_VALIDATE 或者1 必须验证
   * self::VALUE_VALIDATE或者2 值不为空的时候验证
   */
  protected $_validate = array(
      array('nickname', 'require', '昵称不能为空！'), //默认情况下用正则进行验证
      array('username', 'require', '用户名不能为空！'), //默认情况下用正则进行验证
      array('nickname', '', '该昵称已被注册！', 0, 'unique', 1), // 在新增的时候验证nickname字段是否唯一
      array('email', '', '该邮箱已被占用', 0, 'unique', 1), // 新增的时候email字段是否唯一
      // 正则验证密码 [需包含字母数字以及@*#中的一种,长度为6-22位]
      array('password', '/^([a-zA-Z0-9@*#]{6,22})$/', '密码格式不正确,请重新输入！', 0),
      array('repassword', 'password', '确认密码不正确', 0, 'confirm'), // 验证确认密码是否和密码一致
      array('email', 'email', '邮箱格式不正确'), // 内置正则验证邮箱格式
      array('agree', 'require', '请先同意比赛协议！', 1), // 判断是否勾选网站安全协议
  );


  /**
   * 自动完成
   */
  protected $_auto = array (
      array('password', 'encode', 3, 'callback') , // 对password字段在新增和编辑的时候使md5函数处理
      array('regdate', 'time', 1, 'function'), // 对regdate字段在新增的时候写入当前时间戳
      array('regip', 'get_client_ip', 1, 'function'), // 对regip字段在新增的时候写入当前注册ip地址
  );



  protected function encode($data) {
     $key = md5('dlnu');
     $x  = 0;
     $len = strlen($data);
     $l  = strlen($key);
     for ($i = 0; $i < $len; $i++) {
         if ($x == $l) {
          $x = 0;
         }
         $char .= $key{$x};
         $x++;
     }
     for ($i = 0; $i < $len; $i++) {
         $str .= chr(ord($data{$i}) + (ord($char{$i})) % 256);
     }
     return base64_encode($str);
  }

}

 ?>
