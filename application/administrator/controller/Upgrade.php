<?php
namespace app\administrator\controller;
use think\Controller;
class Upgrade extends Base
{
    public function onlineUpdate(){
        return $this->fetch();
    }
    public function devolutionInfo(){
        return $this->fetch();
    }
    public function addonsList(){
        return $this->fetch();
    }
    public function hooksList(){
        return $this->fetch();
    }
    public function moduleList(){
        return $this->fetch();
    }
}