<?php
namespace app\administrator\controller;

class Saleservice extends Base
{
    public function consultList($type=""){
        return $this->fetch();
    }
}