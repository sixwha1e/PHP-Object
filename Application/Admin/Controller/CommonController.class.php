<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * 通用控制器
 * 主要用于验证是否登陆 以及 用户权限
 * @package Home\Controller
 */
class CommonController extends Controller {
    /* 定义管理员id */
    public static $aid = '';

    /**
     * 自动执行
     */

    public function _initialize()
    {
        // 判断用户是否登录
        if (session('aid')) {
            $this->Aid = session('aid');
        } else {
            $this->error('对不起,您还没有登录,正跳转至登录面...', U('Login/login'));
        }
    }

}

 ?>
