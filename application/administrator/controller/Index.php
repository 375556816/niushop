<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/4
 * Time: 15:25
 */
namespace app\administrator\controller;

class Index extends Base{
    public function index()
    {
        return $this->fetch();
    }
}