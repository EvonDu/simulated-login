<?php
namespace actions;

use lib\CurlTools;

class Test{
    static public function run(){
        //hint信息
        echo "Action Test\n";

        //设置登录信息
        $url = "http://localhost/yii-admin2-test/backend/web/index.php?r=site%2Ftest";

        //执行登录
        $result = CurlTools::getCurl($url);

        //输出信息
        echo $url."\n";
        echo $result."\n";
    }
}