<?php
return [
    //配置登录地址
    "url" => "http://localhost/yii-admin2-test/backend/web/index.php?r=site%2Flogin",
    //配置测试地址
    "test_url" => "http://localhost/yii-admin2-test/backend/web/index.php?r=site%2Ftest",
    //配置登录数据
    "data" => [
        "LoginForm[username]"=>"admin",
        "LoginForm[password]"=>"123456",
        "LoginForm[rememberMe]"=>0
    ]
];