<?php
namespace app\administrator\controller;

class System extends Base
{
    public function albumList(){
        return $this->fetch();
    }

    public function goodsCategoryBlock()
    {
        return $this->fetch();
    }

    public function shopAdvList()
    {
        return $this->fetch();
    }
    public function moduleList()
    {
        return $this->fetch();
    }
}