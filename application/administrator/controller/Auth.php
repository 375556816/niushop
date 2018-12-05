<?php
namespace app\administrator\controller;
use think\Controller;
class Auth extends Base
{
    public function userList(){
        return $this->fetch();
    }
}