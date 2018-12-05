<?php
namespace app\administrator\controller;
use think\Controller;
class Account extends Base
{
   public function shopSalesAccount(){
       return $this->fetch();
   }
    public function shopGoodsSalesList(){
        return $this->fetch();
    }
    public function shopGoodsGroupSaleCount(){
        return $this->fetch();
    }
    public function shopReport(){
        return $this->fetch();
    }
    public function shopGoodsSalesRank(){
        return $this->fetch();
    }
}