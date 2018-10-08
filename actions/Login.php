<?php
namespace actions;

use lib\CurlTools;

class Login{
    static public function run(){
        //hint信息
        echo "Action Login\n";

        //获取配置
        $config = include(dirname(__DIR__)."/config/login.php");

        //执行登录
        $result = CurlTools::getCurl($config["url"], $config["data"]);

        //输出信息
        echo $result."\n";
    }
}