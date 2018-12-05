<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/4
 * Time: 15:25
 */
namespace app\administrator\controller;

class Order extends Base{
    public function orderList()
    {
        return view();
    }
    public function invoiceList()
    {
        return $this->fetch();
    }

    public function customerServiceList()
    {
        return $this->fetch();
    }
}