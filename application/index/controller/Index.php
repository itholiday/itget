<?php
namespace app\index\controller;

class Index extends Base
{
    public function index()
    {
        $this->error('支付成功',url('/index/index/test'));
    }
}
