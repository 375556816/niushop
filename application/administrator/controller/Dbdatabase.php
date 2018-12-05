<?php
namespace app\administrator\controller;
use think\Controller;
class Dbdatabase extends Base
{
    public function databaseList(){
        return $this->fetch();
    }
}