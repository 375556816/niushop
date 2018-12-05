<?php
namespace app\administrator\controller;
use think\Controller;
class Wchat extends Base
{
    public function config(){
        return $this->fetch();
    }
    public function menu(){
        return $this->fetch();
    }
    public function weixinQrcodeTemplate(){
        return $this->fetch();
    }
    public function replayConfig(){
        return $this->fetch();
    }
    public function materialMessage(){
        return $this->fetch();
    }
    public function shareConfig(){
        return $this->fetch();
    }
    public function keyConcernConfig(){
        return $this->fetch();
    }
    public function fansMessageManage(){
        return $this->fetch();
    }
}