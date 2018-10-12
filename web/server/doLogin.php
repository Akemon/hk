<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2018/10/11
 * Time: 14:21
 */

//开启session
session_start();
require 'DBHelp.php';
require 'helper.php';

//1 、获取用户提交的用户名和密码
if(empty($_REQUEST['account'])){
    fail("账号参数错误");
}
if(empty($_REQUEST['pwd'])){
    fail("密码参数错误");
}
$account = $_REQUEST['account'];
$pwd = md5($_REQUEST['pwd']);

//2 、执行查询语句判断用户是否存在
$sql = "select * from tb_user where account = '$account' and password = '$pwd'";
$db = new DBHelp();
$result = $db->query($sql);
if(empty($result)){
    fail("用户名或密码不正确");
}else{
    //3 、保存用户状态
    $_SESSION['nickname'] = $result[0]['nickname'];
    $_SESSION['account']  = $result[0]['account'];
    success("登录成功");
}


//4 、返回登录结果