<?php
namespace actions;

use lib\CurlTools;

class Test{
    static public function run(){
        //hint信息
        echo "Action Test\n";

        //获取配置
        $config = include(dirname(__DIR__)."/config/login.php");

        //执行登录
        $result = CurlTools::getCurl($config["test_url"]);

        //输出信息
        echo $config["test_url"]."\n";
        echo $result."\n";
    }
}