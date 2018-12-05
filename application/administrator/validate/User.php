<?php
namespace app\administrator\validate;
use think\Validate;

class User extends Validate
{
    protected $rule =   [
        'user_name'  => 'require|max:25',
        'user_password'   => 'require',
        'captcha'=>'require|captcha',
    ];

    protected $message  =   [
        'user_name.require' => '名称必须',
        'user_name.max'     => '名称最多不能超过10个字符',
        'user_password.require'   => '密码必须',
        'captcha.require'   => '验证码不能为空',
        'captcha.captcha'   => '验证码不正确',
   ];
}
