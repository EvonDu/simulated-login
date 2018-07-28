<?php
namespace actions;

use lib\CurlTools;

class Login{
    static public function run(){
        //hint信息
        echo "Action Login\n";

        //设置登录信息
        $loginUrl = "http://localhost/yii-admin2-test/backend/web/index.php?r=site%2Flogin";
        $loginData = include(dirname(__DIR__)."/config/login.php");

        //执行登录
        $result = CurlTools::getCurl($loginUrl, $loginData);

        //输出信息
        echo $result."\n";
    }
}