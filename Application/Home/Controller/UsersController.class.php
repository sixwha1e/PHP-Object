<?php
namespace Home\Controller;
use Think\Controller;

class UsersController extends CommonController {

  /**
   * 关于我 页面
   *
   */
  public function myself() {

    $where = array(
      'userid' => I('session.uid')
    );

    $this->saveResult();
    $my = M('result')->where($where)->field('allscore,submitnum')->find();

    $this->assign('my',$my);
    $this->display();
  }


  /**
   * 比赛排名页面
   *
   */
  public function rank($p) {
    $p = ($p < 1)?1:$p;
    $p1 = ($p-1) * 10;
    $p2 = $p * 10;
    $t = array();
    $this->saveResult();
    $results = M('result')->limit($p1,$p2)->order('allscore desc')->select();
    for($i=0;$i<10;$i++) {
      if($results[$i]['allscore'] == $results[$i+1]['allscore'] && $results[$i]['submitnum'] > $results[$i+1]['submitnum']) {
        $t = $results[$i];
        $results[$i] = $results[$i+1];
        $results[$i+1] = $t;
      }
    }

    $this->assign('results', $results);
    $this->assign('p',$p);
    $this->display();
  }


  /**
   * 返回总分数
   *
   */
  public function Allscore() {
    $where = array(
      'status' => 1,
      'userid' => I('session.uid')
    );
    $Allscore = M('answer')->where($where)->sum('score');
    return $Allscore;
  }


  /**
   * 返回全部提交次数
   *
   */
  public function Submitnum() {
    $where = array(
      'userid' => I('session.uid')
    );

    $Submitnum = M('answer')->where($where)->sum('num');
    return $Submitnum;
  }


  /**
   * 更新result表里的 allscore和submitnum字段
   *
   */
  public function saveResult() {
    $where = array(
      'userid' => I('session.uid')
    );

    $data = array(
      'allscore' => $this->Allscore(),
      'submitnum' => $this->Submitnum()
    );

    $res = M('result')->where($where)->save($data);
    return $res;
  }


}

 ?>
