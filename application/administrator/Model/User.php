<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/4
 * Time: 22:23
 */
namespace app\administrator\Model;

use think\Model;

class User extends Model{

    protected $connection = [
        'prefix'      => 'sys_',
    ];
}