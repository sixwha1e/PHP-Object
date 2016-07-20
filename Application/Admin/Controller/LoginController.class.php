<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller {
  public function login() {
    $this->display();
  }

  public function test() {
    if (IS_POST) {
      $data = D('login')->create();
      $this->assign('data',$data);
      $this->assign('name',I('post.aname'));
      $this->display();
    }
  }
}



 ?>
