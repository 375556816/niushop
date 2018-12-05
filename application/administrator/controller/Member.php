<?php
namespace app\administrator\controller;
use think\Controller;
class Member extends Base
{
    public function memberList(){
        return $this->fetch();
    }
    public function memberLevelList(){
        return $this->fetch();
    }
    public function userCommissionWithdrawList(){
        return $this->fetch();
    }
    public function pointList(){
        return $this->fetch();
    }
    public function accountList(){
        return $this->fetch();
    }
    public function weixinFansList(){
        return $this->fetch();
    }
    public function supplierList(){
        return $this->fetch();
    }
    public function addSupplier(){
        return $this->fetch();
    }
}