<?php

namespace Home\Controller;
use Think\Controller;

class SubjectController extends Controller {

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
}


 ?>
