<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/4
 * Time: 15:25
 */
namespace app\administrator\controller;
use think\Session;
use think\Controller;
use app\administrator\Model\Module;

class Base extends Controller{
    public function _initialize()
    {
        //开启模板布局
        $this->view->engine->layout('Layout/layout');
        //判断是否登陆
        if (!Session::has('user_info')){
            $this->error('请登陆',url('login/login'));
        }
        $this->getNav();
        $this->getActions();
        $this->init();
    }
    protected function init()
    {
    }

    //获取当前控制器下所有方法，侧边栏显示
    protected function getActions(){
        $method = request()->action();
        $controller = request()->controller();
        $module = Module::get(['url'=>$controller.'/'.$method,'is_menu'=>1]);
        if ($module->pid){
            $pid = $module->pid;
        }else{
            $pid = $module->module_id;
        }
        $actions = Module::where('pid',$pid)->where('is_menu',1)->order('sort','asc')->select();
        $this->assign('actions',$actions);
        $this->assign('method',$method);
    }
    //获取顶部导航栏
    protected function getNav(){
        $method = request()->action();
        $controller = request()->controller();
        $module = Module::get(['url'=>$controller.'/'.$method,'is_menu'=>1]);
        if ($module->pid){
            $pid = $module->pid;
            $module = Module::get(['module_id'=>$pid,'is_menu'=>1]);
            $controller = $module->controller;
        }else{
            $controller = $module->controller;
        }
        $navs = Module::where('pid',0)->where('is_menu',1)->order('sort','asc')->select();
        $this->assign('navs',$navs);
        $this->assign('controller',$controller);
    }
}
