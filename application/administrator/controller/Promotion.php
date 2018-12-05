<?php
namespace app\administrator\controller;
use think\Controller;
class Promotion extends Base
{
   public function couponTypeList(){
       return $this->fetch();
   }
    public function pointConfig(){
        return $this->fetch();
    }
    public function giftList(){
        return $this->fetch();
    }
    public function mansongList(){
        return $this->fetch();
    }
    public function getDiscountList(){
        return $this->fetch();
    }
    public function fullShipping(){
        return $this->fetch();
    }
    public function integral(){
        return $this->fetch();
    }
}