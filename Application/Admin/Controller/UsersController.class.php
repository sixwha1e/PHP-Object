<?php

namespace Admin\Controller;
use Think\Controller;

class UsersController extends CommonController {
  public function index() {
    $all = M('users')->select();
    $count = M('users')->Count();
    for($i=0;$i<$count;$i++) {
      $all[$i]['decode'] = $this->decode($all[$i]['password']);
    }
    
    $this->assign('all', $all);
    $this->assign('count',$count);
    $this->display();
  }


  public function rank() {
    $t = array();
    $results = M('result')->order('allscore desc')->select();
    $num = M('result')->Count();
    for($i=0;$i<$num;$i++) {
      if($results[$i]['allscore'] == $results[$i+1]['allscore'] && $results[$i]['submitnum'] > $results[$i+1]['submitnum']) {
        $t = $results[$i];
        $results[$i] = $results[$i+1];
        $results[$i+1] = $t;
      }
    }

    $this->assign('results', $results);
    $this->assign('num',$num);
    $this->display();
  }


  protected function decode($data) {
      $key = md5('dlnu');
      $x = 0;
      $data = base64_decode($data);
      $len = strlen($data);
      $l = strlen($key);
      for ($i = 0; $i < $len; $i++) {
          if ($x == $l)
          {
           $x = 0;
          }
          $char .= substr($key, $x, 1);
          $x++;
      }
      for ($i = 0; $i < $len; $i++) {
          if (ord(substr($data, $i, 1)) < ord(substr($char, $i, 1))) {
              $str .= chr((ord(substr($data, $i, 1)) + 256) - ord(substr($char, $i, 1)));
          } else {
              $str .= chr(ord(substr($data, $i, 1)) - ord(substr($char, $i, 1)));
          }
      }
      return $str;
  }
}



 ?>
