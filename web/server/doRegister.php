<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2018/10/11
 * Time: 17:46
 */

require  "DBHelp.php";
require "helper.php";

$account = $_POST['account'];
$nickname = $_POST['nickname'];
$pwd = $_POST['pwd'];
$pwd = md5($pwd);
if(!empty($account)&&!empty($nickname)&&!empty($pwd)){

    $db = new DBHelp();
    //判断是否存在此用户
    $checkUserSql = "select * from tb_user where account = '$account'";
    $flag = $db->query($checkUserSql);
    if($flag){
        fail("用户帐号已存在");
    }else{
        $insertSql = "insert into tb_user(account,nickname,password) values ('$account','$nickname','$pwd')";
//    echo $sql;
        $result  = $db->nonQuery($insertSql);
        if($result){
            success("注册成功");
        }else{
            fail("注册失败");
        }
    }
}else{
    fail("用户信息填写不完整");
}
