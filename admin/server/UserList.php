<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2018/10/11
 * Time: 16:57
 */
require  "../../common/server/helper.php";
require "../../common/server/DBHelp.php";

$sql = "select id,account,nickname from tb_user";
$db = new DBHelp();
$result = $db->query($sql);
if($result){
//    echo $result;
    success($result);
}else{
    fail("未查到记录");
}