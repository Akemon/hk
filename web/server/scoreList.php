<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2018/10/10
 * Time: 10:04
 */
session_start();
//从数据库中读取成绩列表 ，并以json形式返回到客户端
require 'DBHelp.php';
require 'helper.php';
//// 1 、连接服务器
//$connection = mysqli_connect(HOST,USER,PASSWORD,DBNAME,PORT);
//if(!$connection){
//    echo "数据库连接错误";
//}else{
////    echo "数据库连接成功";
//}
//// 解决中文乱码
//mysqli_query($connection,"set names utf8");
//// 2 、发送sql获取数据
//$sql = 'select * from score order by mark desc';
//$result = mysqli_query($connection,$sql);
//// 3 、处理结果
//if($result == false){
//    echo "查询错误";
//    die;
//}
//$arr = mysqli_fetch_all($result,MYSQLI_ASSOC);
//var_dump($arr);

// 4 、关闭连接
//mysqli_close($connection);
if(empty($_SESSION['nickname'])){
    fail('请重新登录') ;
}
$sql = 'select * from score order by mark desc';
$dbHelper = new DBHelp();
$arr = $dbHelper->query($sql);
echo json_encode($arr);