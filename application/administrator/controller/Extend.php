<?php
namespace app\administrator\controller;

class Extend extends Base
{
    public function addonsList(){
        return $this->fetch();
    }
    public function hooksList(){
        return $this->fetch();
    }
}