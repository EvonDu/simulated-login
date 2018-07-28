<?php
    //加载
    require __DIR__ . '/vendor/autoload.php';

    //操作列表
    $hint = [
        "1:Login",
        "2:Test"
    ];
    $hint = implode("\n",$hint)."\n\n";
    echo $hint;

    //设置配置
    $config = include("config/main.php");
    \lib\CurlTools::init($config["cookie"]);

    //循环
    while (true){
        //操作提示
        echo "Select:";
        $num = trim(fgets(STDIN));
        echo "\n////////////////////////////////////////////////////////////////////////\n\n";
        //路由执行方法
        switch ($num){
            case 1:{
                \actions\Login::run();
                break;
            }
            case 2:{
                \actions\Test::run();
                break;
            }
            default:{
                echo $hint;
            }
        }
        //输出
        echo "\n////////////////////////////////////////////////////////////////////////\n\n";
    }
?>