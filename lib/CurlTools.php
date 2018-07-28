<?php
namespace lib;

class CurlTools{
    static public $cookie = "cookie";

    /**
     * 初始化
     * @param $cookie
     */
    static function init($cookie){
        self::$cookie = $cookie;
    }

    /**
     * 获取Curl数据
     * @url       请求地址
     * @isPost    是否使用POST的方式请求
     * @data      POST的数据
     * @headers   Http头
     */
    static function getCurl($url,$postData=array(),$headers=array()){
        //初始化
        $ch = curl_init();

        //设置url基本
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0); //是否显示头信息
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0); //是否自动显示返回的信息
        curl_setopt($ch, CURLOPT_TIMEOUT, 60); //设置超时
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1); //是否抓取跳转后的页面,1是自动跳转
        curl_setopt($ch, CURLOPT_COOKIEJAR, self::$cookie); //设置cookie信息保存在指定的文件中

        //设置post
        if(!empty($postData)){
            curl_setopt($ch, CURLOPT_POST, TRUE); //设置用POST
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postData); //设置POST数据
        }

        //设置header
        if(!empty($headers)){
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }


        //设置使用的Cookie文件
        if(file_exists(self::$cookie))
            curl_setopt($ch,CURLOPT_COOKIEFILE,self::$cookie);  //选择使用的cookie

        //转为获取请求Header信息
        //curl_setopt($ch, CURLOPT_HEADER, true);
        //curl_setopt($ch, CURLOPT_NOBODY,true);

        //获取返回值
        $result = curl_exec($ch);
        curl_close($ch);

        //返回
        return $result;
    }
}