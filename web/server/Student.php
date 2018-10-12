<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2018/10/11
 * Time: 10:55
 */
class Student{
    private $name;
    private $sex;
    private $age;

    /**
     * Student constructor.
     * @param $name
     * @param $sex
     */
    //给形参设置默认null值实现构造器重载
    public function __construct($name=null,$sex=null,$age=null)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
    }

    /**
     * @return null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return null
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param null $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    /**
     * @return null
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param null $age
     */
    public function setAge($age)
    {
       if($age<0) {
           $age = 0;
       }
       $this->age =$age;
    }

    public function sayHi(){
        echo "姓名:".$this->name ."性别:".$this->sex ."年龄：".$this->age;
    }


}