<?php
namespace app\administrator\controller;

class Cms extends Base
{
    public function articleList(){
        return $this->fetch();
    }
    public function topicList(){
        return $this->fetch();
    }
}