<?php

class Student
{
    public static $name = 'Teo';
    private static $money = 1000;
    public $address = 'Ha Noi';

    public function getMoney()
    {
        return self::getAddress();
        //self::$money;
    }

    public static function getAddress()
    {
        //$mySt = new Student;
        return (new Student)->address;
    }

    public static function getName()
    {
        //var_dump($this);
        // trong phuong thuc khai bao static
        // khong ton tai contro this
        return self::$name; //$this->name;
        // Student::$name;
    }
}
$st = new Student;
//echo $st->name;
// vi thuoc tinh name la static => nen khong the dung doi tuong thuoc class truy cap dc
//muon truy cap thi goi thang class truy cap vao (khong can tao ra doi tuong cua class de truy cap)
$name123 = Student::$name;
//echo $name123;
//echo Student::getName();
echo $st->getMoney();//