<?php
/**
 * --前端入口
 */

define('APP_PATH', './Application/');
//生成后台模块
//define('BIND_MODULE','Admin');

//生成后台控制器
//define('BUILD_CONTROLLER_LIST','Index,User,Menu');
// 定义运行时目录
define('RUNTIME_PATH','./Application/Runtime/');
// 开启调试模式
define('APP_DEBUG',True);
require './ThinkPHP/ThinkPHP.php';
