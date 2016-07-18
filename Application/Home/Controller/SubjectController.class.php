<?php

namespace Home\Controller;
use Think\Controller;

class SubjectController extends CommonController {

  public function subjectlist($type) {
    $subject = D('subject');
    $where = array(
      'type' => $type
    );
    $subject_list = $subject->where($where)->select();
    $num = $subject->where($where)->count('pid');

    foreach ($subject_list as $key => $value) {
      $s_list[$key]['pid'] = $value['pid'];
      $s_list[$key]['type'] = $value['type'];
      $s_list[$key]['score'] = $value['score'];
      $s_list[$key]['url'] = $value['url'];
      $s_list[$key]['tip'] = $value['tip'];
    }

    $this->assign('s_list',$s_list);
    $this->assign('num',$num);
    $this->display();
  }

  public function checkflag() {
    if(IS_POST) {
      $userid = I('session.uid');
      //实例化 @subject 对象
      $subject = D('subject');

      // 自动验证 创建数据集
      if (!$data = $subject->create()) {
          // 防止输出中文乱码
          header("Content-type: text/html; charset=utf-8");
          exit($subject->getError());
      }

      // 组合查询条件 subject表
      $where = array();
      $where['pid'] = $data['pid'];
      $result = $subject->where($where)->field('pid,flag,score')->find();

      //组合查询条件 answer表
      $res = array(
        'pid' => $result['pid'],
        'userid' => $userid,
        'score' => $result['score']
      );

      //如果answer表里没有这道题的记录 就insert一条记录
      if (!(M('answer')->where($res)->find())) {
        M('answer')->add($res);
      }

      //验证 flag
      if ($result && $result['flag'] === $data['flag']) {
        $res1['status'] = 1; //提交正确 题目状态为1
        $res1['time'] = time();//提交正确答案时间
        
        M('answer')->where($res)->setField($res1);

        $this->success('这才是正经的flag!', U('Subject/subjectlist?type=web'));
      } else {
        M('answer')->where($res)->setInc('num');//提交次数num加1

        $this->error('并不是正确的flag...');
      }
    }
  }





}


 ?>
