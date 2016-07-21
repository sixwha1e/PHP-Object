<?php
namespace Admin\Model;
use Think\Model;

class LoginModel extends Model {
  //重新定义表
  protected $tableName = 'admin';

  /**
   * 自动验证
   * self::EXISTS_VALIDATE 或者0 存在字段就验证（默认）
   * self::MUST_VALIDATE 或者1 必须验证
   * self::VALUE_VALIDATE或者2 值不为空的时候验证
   */
  protected $_validate = array(
      array('aname', 'require', '用户名不能为空！'), //默认情况下用正则进行验证
      array('apassword', 'require', '登录密码不能为空！'), // 默认情况下用正则进行验证
  );


  /**
   * 自动完成
   */
  protected $_auto = array(
      /* 登录的时候自动完成 */
      array('alastdate', 'time', 1, 'function'), // 对lastdate字段在登录的时候写入当前时间戳
      array('apassword', 'encode', 3, 'callback'), // 对password字段新增和编辑的时候回调encode函数
      array('alastip', 'get_client_ip', 1, 'function'), // 对lastip字段在登录的时候写入当前登录ip地址
  );



  /**
   * 密码encode
   */
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
