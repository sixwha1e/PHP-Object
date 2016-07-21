<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller {

  public function login() {
    if (IS_POST) {
      $login = D('Login');
      if (!$data = $login->create()) {
        // 防止输出中文乱码
        header("Content-type: text/html; charset=utf-8");
        exit($login->getError());
      }

      $where = array();
      $where['aname'] = $data['aname'];

      $res = $login->where($where)->field('aid,aname,apassword,alastdate,alastip')->find();
      //验证管理员密码
      if ($res && $res['apassword'] === $data['apassword']) {
        session('aid', $res['aid']);
        session('aname', $res['aname']);
        session('alastdate', $res['alastdate']);
        session('alastip', $res['alastip']);

        $where['aid'] = session('aid');
        M('users')->where($where)->save($data);

        $this->success('登录成功,正跳转至后台...', U('Index/index'));
      }else {
        $this->error('你不是管理员 口亨！');
      }

    }else {
      $this->display();
    }
  }


  /**
   * 用户注销
   */
  public function logout() {
      // 清楚所有session
      session(null);
      $this->success('正在退出登陆...', U('Login/login'), 1);

  }


}



 ?>
