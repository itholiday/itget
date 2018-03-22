<?php

namespace app\admin\controller;

use think\Controller;

class Base extends Controller
{
    //当任何函数加载时候  会调用此函数
    public function _initialize()
    {
        $uid = session('user')['id'];
        if (empty($uid)) {
            echo '<script>alert("没有登陆");location.href="' . U('index/login/index') . '"</script>';
        }

        $AUTH = new \org\Auth();
        // MODULE_NAME(index).'/'.CONTROLLER_NAME(index).'/'.ACTION_NAME(index)==index/index/index

        if (!$AUTH->check(MODULE_NAME . '/' . CONTROLLER_NAME . '/' . ACTION_NAME, session('user')['id'])) {

            echo '<script>location.href="' . U('index/login/check_error') . '"</script>';
        }

    }
}