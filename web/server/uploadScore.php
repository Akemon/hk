<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2018/10/11
 * Time: 8:54
 */
session_start();
require 'DBHelp.php';
require 'helper.php';
// 1. 接收用户上传的数据
//$_GET 保存以get形式传递的参数 (数组)
//$_POST 保存以post形式传递的参数 (数组)
//var_dump($_GET);
if(empty($_SESSION['nickname'])){
    header("Location: ../cn/login.html");
    fail('请重新登录') ;
    die;
}
if(empty($_GET['score'])){
    fail( '成绩参数错误');
    die;
}
$nickname = $_SESSION['nickname'];
$score = $_GET['score'];

$sql = "insert into score(nickname,mark,state) values('$nickname','$score',1)";
//echo $sql;
$dbHelper = new DBHelp();
$result = $dbHelper->nonQuery($sql);
//var_dump($result);
if($result){
   success("成绩上传成功");
}else{
    fail("成绩上传失败") ;
}