<?php

namespace Admin\Controller;
use Think\Controller;

class UsersController extends CommonController {
  public function index() {
    $all = M('users')->select();
    $count = M('users')->Count();

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
}



 ?>
