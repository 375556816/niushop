<?php
namespace app\administrator\controller;
use think\Controller;
class Config extends Base
{
   public function userNotice(){
        return $this->fetch();
   }
    public function shopNavigationList(){
        return $this->fetch();
    }
    public function goodsCategoryBlock(){
        return $this->fetch();
    }
    public function pcTemplate(){
        return $this->fetch();
    }
    public function searchConfig(){
        return $this->fetch();
    }
    public function shopAdvlist(){
        return $this->fetch();
    }
    public function articleList(){
        return $this->fetch();
    }
    public function topicList(){
        return $this->fetch();
    }
    public function helpDocument(){
        return $this->fetch();
    }
    public function linkList(){
        return $this->fetch();
    }
    public function webConfig(){
        return $this->fetch();
    }
    public function shopSet(){
        return $this->fetch();
    }

    public function databaselist(){
        return $this->fetch();
    }
    public function userlist(){
        return $this->fetch();
    }
}