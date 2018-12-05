<?php
namespace app\administrator\controller;

class Goods extends Base
{
    public function goodsList($state_type="",$stock_warning=""){//欢迎页  商品列表
        return $this->fetch();
    }
    public function recycleList(){
        //回收站
        return $this->fetch();
    }
    public function addGoods(){
        return $this->fetch();
    }
    public function goodsCategoryList(){
        return $this->fetch();
    }
    public function addGoodsCategory(){
        return $this->fetch();
    }
    public function goodsBrandList(){
        return $this->fetch();
    }
    public function addGoodsBrand(){
        return $this->fetch();
    }
    public function goodsGroupList(){
        return $this->fetch();
    }
    public function addGoodsGroup(){
        return $this->fetch();
    }
    public function goodsSpecList(){
        return $this->fetch();
    }
    public function addGoodsSpec(){
        return $this->fetch();
    }
    public function attributeList(){
        return $this->fetch();
    }
    public function addAttributeService(){
        return $this->fetch();
    }
    public function goodsComment(){
        return $this->fetch();
    }
}