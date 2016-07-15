<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller {

  //登陆
  public function login() {

    // 判断提交方式
    if (IS_POST) {
        // 实例化Login对象
        $login = D('Login');

        // 自动验证 创建数据集
        if (!$data = $login->create()) {
            // 防止输出中文乱码
            header("Content-type: text/html; charset=utf-8");
            exit($login->getError());
        }

        // 组合查询条件
        $where = array();
        $where['nickname'] = $data['nickname'];
        $result = $login->where($where)->field('userid,username,nickname,password,lastdate,lastip')->find();
        // 验证用户名 对比 密码

        if ($result && $result['password'] == $data['password']) {
            // 存储session

            session('uid', $result['userid']);          // 当前用户id
            session('nickname', $result['nickname']);   // 当前用户昵称
            session('username', $result['username']);   // 当前用户名
            session('lastdate', $result['lastdate']);   // 上一次登录时间
            session('lastip', $result['lastip']);       // 上一次登录ip

            // 更新用户登录信息
            $where['userid'] = session('uid');
            M('users')->where($where)->setInc('loginnum');   // 登录次数加 1
            M('users')->where($where)->save($data);   // 更新登录时间和登录ip

            $this->success('登录成功,正跳转至系统首页...', U('Users/web'));

        } else {
            $this->error('登录失败,用户名或密码不正确!');
        }

    } else {
        $this->display();
    }
  }
/*
public function login1() {
  $user = D('login');
  $data = $user->create();

  $this->assign('password',$data['password']);
  $this->display();
}
*/
  /**
   * 用户注册
   */
  public function register() {
      // 判断提交方式 做不同处理
      if (IS_POST) {
          // 实例化User对象
          $user = D('users');

          // 自动验证 创建数据集
          if (!$data = $user->create()) {
              // 防止输出中文乱码
              header("Content-type: text/html; charset=utf-8");
              exit($user->getError());
          }

          //插入数据库
          if ($id = $user->add($data)) {
              $this->success('注册成功', U('Index/index'), 1);
          } else {
              $this->error('注册失败');
          }
      } else {
          $this->display();
      }
  }



  /**
   * 用户注销
   */
  public function logout() {
      // 清楚所有session
      session(null);
      $this->success('正在退出登陆...', U('Index/index'), 1);

  }

}
 ?>
