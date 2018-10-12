<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2018/10/10
 * Time: 9:45
 */
include 'Student.php';
// 1、变量、数据类型
echo 'stupid php <br/>';
$num = 10;
echo "一个变量:" . $num .'<br/>';
$num ="呵呵哒";
echo "修改类型之后:" . $num .'<br/>';
echo "双引号里的变量可解析:$num" .'<br/>';
// 2、基础语句

// 3、分支循环
for($i = 0 ;$i<5;$i++){
    echo "<h1>这是标题</h1>";
}
// 4、函数
function a($i){
    echo "这是一个函数".$i ."<br>" ;
}
a(10000);

// 5、工具

// 6、面向对象

$stu1 = new Student();
//$stu ->name ="李白";
//$stu->sex = "男";
//$stu->age = 100;
$stu1->sayHi();
echo "<br/>";
$stu2 = new Student("呵呵哒","女",18);
$stu2->sayHi();
echo "<br/>";
$stu3 = new Student();
$stu3->setName("hk");
$stu3->setAge(21);
$stu3->setSex("男");
$stu3->sayHi();