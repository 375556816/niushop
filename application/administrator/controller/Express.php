<?php
namespace app\administrator\controller;
use think\Controller;
class Express extends Base
{
    public function expressCompany(){
        return $this->fetch();
    }
}