<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/4
 * Time: 15:25
 */
namespace app\administrator\controller;
use think\Controller;
use think\Request;
use think\Session;
use app\administrator\Model\User;

class Login extends Controller{
    public function login()
    {
        return $this->fetch();
    }

    public function checkLogin(Request $request)
    {
        $data = $request->post();
        $validate = $this->validate($data,'User');
        if (true !== $validate) {
            return $validate;
        }
        $user = User::get(['user_name' => "$data[user_name]",'user_password' => md5($data['user_password'])]);
        if (!$user){
            return '密码错误';
        }else{
            $user->last_login_time = empty($user->current_login_time)?time():$user->current_login_time;
            $user->current_login_time = time();
            $user->last_login_ip = empty($user->current_login_ip)?$request->ip():$user->current_login_ip;
            $user->current_login_ip = $request->ip();
            $user->save();
            Session::set('user_info',$user);
        }
    }
    
}