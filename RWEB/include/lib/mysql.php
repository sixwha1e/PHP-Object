<?php
 /**
  * MySql数据库操作类
  */

define('CONFIG_PATH',dirname(__FILE__));//配置文件路径



class MySql {
  //数据库
  protected $DB_HOST ;
  protected $DB_USER ;
  protected $DB_PASSWD ;
  protected $DB_NAME;
  //管理员
  protected $username;
  protected $passwd;

  protected $conn;
  protected $selectDB;
  protected $QueryCount;
  protected $createTime;

  function __construct($host,$dbuser,$dbpwd,$database,$user,$pwd) {
    $this->DB_HOST = $host;
    $this->DB_USER = $dbuser;
    $this->DB_PASSWD = $dbpwd;
    $this->DB_NAME = $database;

    $this->username = $user;
    $this->passwd = $pwd;

    $this->conn = $this->connect();
    $this->selectDB = $this->selectDB();
    $this->createTime = date("Y-m-d G:i:s");
  }

  /**
  * 数据库连接
  */
  function connect() {
    $this->conn = mysql_connect($this->DB_HOST,$this->DB_USER,$this->DB_PASSWD);
    if(!$this->conn){
      die('数据库连接失败！');
      exit;
    }
    return $this->conn;
  }

  /**
  * 发送sql语句
  */
  function query($sql) {
    mysql_select_db($this->DB_NAME,$this->conn);
    if(!mysql_query($sql,$this->conn)) {
      die('sql语句错误');
      exit;
    }else {
      $this->QueryCount++;
      return mysql_query($sql);
    }
  }

  /**
  * 安装数据库
  */
  function createDB() {
    $this->connect();

    $dropDB = "DROP DATABASE IF EXISTS $this->DB_NAME;";
    if(!mysql_query($dropDB)) {
      echo "不能删除已经存在的数据库：".mysql_error();
      exit;
    }

    $createDB = "CREATE DATABASE $this->DB_NAME;";
    if(!mysql_query($createDB)) {
      echo "不能创建数据库".mysql_error();
      exit;
    }

    if(!mysql_select_db($this->DB_NAME, $this->conn)) {
      echo "不能找到所需数据库".mysql_error();
      exit;
    }

    $createTB = "CREATE TABLE user
						(
							userid int(5) not null auto_increment primary key,
							username varchar(15) not null,
							password varchar(32) not null,
              createTime varchar(30) not null,
							lastLoginTime varchar(30) not null,
							lastIp varchar(30) not null,
							isCreate int(3) not null
						);";
    if(!mysql_query($createTB)) {
      echo "创建用户表失败：".mysql_error();
      exit;
    }
    $this->createUser();

    $path = dirname(__FILE__);
    $handle = opendir($path);
    if($handle) {
      $fp = fopen($path.'/install.lock','w');
      fwrite($fp,"install ok!");
      fclose($fp);
    }
    return TRUE;
  }

  /**
  * 创建管理员用户
  */
 function createUser() {
    $createUser = "INSERT INTO user VALUES
			('1','".$this->username."','".md5($this->passwd)."','".$this->createTime."','".$this->getTime()."','".$this->getIP()."','1');";
    if(!mysql_query($createUser)) {
      echo "添加管理员用户失败".mysql_error();
      exit;
    }
  }


  /**
   * 获取登陆IP
  **/
  function getIp() {
  	if (isset($_SERVER['REMOTE_ADDR'])) {
  	  $ip = $_SERVER['REMOTE_ADDR'];
  	} elseif (getenv("REMOTE_ADDR")) {
  	  $ip = getenv("REMOTE_ADDR");
  	} elseif (getenv("HTTP_CLIENT_IP")) {
  	  $ip = getenv("HTTP_CLIENT_IP");
  	} else {
  	  $ip = "unknown";
  	}
    return $ip;
  }


  /**
   * 获取最后登陆时间
  **/
  function getTime(){
    $time = date("Y-m-d G:i:s");
    return $time;
  }


  /**
  *　验证安装是否成功
  */
  function isInstall() {
    if(!file_exists(CONFIG_PATH.'/install.lock')){
      echo "安装失败";
      exit;
    }else {
      echo "install successfully！";
    }
  }


  /**
  * 返回数据库版本
  */
  function getMysqlVersion() {
    return mysql_get_server_info();
  }


/**
 * 选择一个数据库
**/
  function selectDB() {
    return mysql_select_db($thsi->DB_NAME,$this->conn);
  }
}


?>
