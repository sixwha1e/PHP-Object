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


  /**
   *刷新题目状态页面
   *
   */
  public function status() {
    $r = M('subject')->select();
    $n = M('subject')->Count('pid');
    //更新每道题的firstblood
    for($i=0;$i<$n;$i++){
      $this->firstblood($r[$i]['pid']);
    }

    $this->assign('r',$r);
    $this->assign('n',$n);
    $this->display();
  }

  /**
   * 识别每道题正确答案的第一个提交者
   *
   */
  protected function firstblood($pid) {
    //组合查询条件：题号 状态为正确(status =1)
    $where = array(
      'pid' => $pid,
      'status' => 1
    );
    $answer = M('answer')->where($where)->select();//answer表里符合条件的全部数据数组
    $num = M('answer')->Count();//符合条件的数据条数
    $min = array();
    $min = $answer[0];//第一条数据赋值给$min

    //循环：比较提交时间 得到提交者的userid
    for($i=0;$i<$num;$i++) {
      if($min['time'] > $answer[$i]['time']) {
        $min['time'] = $answer[$i]['time'];
        $min['userid'] = $answer[$i]['userid'];
      }
    }
    $data['firstblood'] = $min['userid'];
    //更新数据firstblood = userid
    return M('subject')->where($where)->save($data);
  }



}



 ?>
