<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2018/10/11
 * Time: 11:19
 */
header("Content-Type:application/json;charset = UTF-8");
//常量
define('HOST','localhost');
define('USER','root');
define('PASSWORD','');
define('DBNAME','game');
define('PORT',3306);
class DBHelp
{
    private function open(){
        $connection = mysqli_connect(HOST,USER,PASSWORD,DBNAME,PORT);
        if(!$connection){
            echo "数据库连接错误";
        }
//       else{
////            echo "数据库连接成功";
//        }
// 解决中文乱码
        mysqli_query($connection,"set names utf8");
        return $connection;
    }

    private function close($con){
        mysqli_close($con);
    }
    /***
     * 执行查询语句
     * @param $sql
     * @return array|null
     */
    public function query($sql){
        $connection  = $this->open();
        $result = mysqli_query($connection,$sql);
        if(!$result){
            echo '查询错误' . mysqli_error($connection);
            die;
        }
        $arr = mysqli_fetch_all($result,MYSQLI_BOTH);
        $this->close($connection);
        return $arr;
    }

    /***
     * 执行非查询语句
     * @param $sql
     * @return bool|mysqli_result
     */
    public function nonQuery($sql){
        $connection = $this->open();
        $result = mysqli_query($connection,$sql);
//    echo mysqli_error($connection);
        $this->close($connection);
        return $result;
    }



}