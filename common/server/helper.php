<?php
///**
// * Created by PhpStorm.
// * User: User
// * Date: 2018/10/11
// * Time: 9:06
// */
//
//header("Content-Type:application/json;charset = UTF-8");
////常量
//define('HOST','localhost');
//define('USER','root');
//define('PASSWORD','');
//define('DBNAME','game');
//define('PORT',3306);
//
///***
// * 打开数据库连接
// */
//function open(){
//    $connection = mysqli_connect(HOST,USER,PASSWORD,DBNAME,PORT);
//    if(!$connection){
//        echo "数据库连接错误";
//    }else{
////    echo "数据库连接成功";
//    }
//// 解决中文乱码
//    mysqli_query($connection,"set names utf8");
//    return $connection;
//}
//
///***
// * 执行查询语句
// * @param $sql
// * @return array|null
// */
//function query($sql){
//    $connection  = open();
//    $result = mysqli_query($connection,$sql);
//    if(!$result){
//        echo '查询错误' . mysqli_error($connection);
//        die;
//    }
//    $arr = mysqli_fetch_all($result,MYSQLI_BOTH);
//    $this->close($connection);
//    return $arr;
//}
//
///***
// * 执行非查询语句
// * @param $sql
// * @return bool|mysqli_result
// */
//function nonQuery($sql){
//    $connection = open();
//    $result = mysqli_query($connection,$sql);
////    echo mysqli_error($connection);
//    close($connection);
//    return $result;
//}
///***
// * 关闭连接
// * @param $con
// */
////function close($con){
////    mysqli_close($con);
////}
//
/***
 * 执行成功返回到浏览器的json
 * @param $msg
 */
function success($msg){
    $arr = ['code'=>1,'message'=>$msg];
    echo json_encode($arr);
}

/***
 * 执行失败返回到浏览器的json
 * @param $msg
 */
function fail($msg){
    $arr = ['code'=>0,'message'=>$msg];
    echo json_encode($arr);
}