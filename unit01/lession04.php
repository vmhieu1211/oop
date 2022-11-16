<?php

class A
{
    public $name = 'Teo';

    public function __construct()
    {
        // ham khoi tao
        // magic method
        // const magic oop
        echo "Ten class " . __CLASS__ . " - ten ham " . __FUNCTION__;
        echo "<br/>";
        // day la method se tu dong chay dau tien khi khoi tao doi tuong cho class (luon luon chay dau tien nhat neu thoa man dieu kien)
        // tat ca cac magic method deu o dang public
    }

    public function __destruct()
    {
        echo "<br/>";
        echo "Ten class " . __CLASS__ . " - ten ham " . __FUNCTION__;
        // ham nay tu dong chay cuoi cung khi khoi tao doi tuong cua class (khong con bat ky phuong nao co the chay sau phuong thuc nay)
    }

    function getName()
    {
        // neu ko khai bao pham vi truy cap - mac dinh la public (ko nen lam vay)
        return $this->name;
    }

    public function __call($method, $args)
    {
        // $method : ten phuong thuc ma ko ton tai truy cap ben ngoai class
        // $args : mang tham so cua phuong thuc
        // tu dong chay khi truy cap vao phuong thuc khong phai la static khong ton tai trong class
        echo "<br/>";
        echo "Ban vua truy cap vao PT {$method} khong ton tai trong class - voi cac tham so :";
        echo "<pre>";
        print_r($args);
        echo "<br/>";

    }

    public static function __callStatic($method, $args)
    {
        echo "<br/>";
        echo "Ban vua truy cap vao PT static {$method} khong ton tai trong class - voi cac tham so :";
        echo "<pre>";
        print_r($args);
        echo "<br/>";
    }

    public function __get($name)
    {
        // $name : ten thuoc tinh
        // $default : gia tri cua thuoc tinh
        echo "<br/>";
        echo "Ban vua truy cap vao thuoc tinh {$name} khong ton tai";
        echo "<br/>";
    }

    public function __set($name, $value)
    {
        echo "<br/>";
        echo "Ban vua truy cap vao thuoc tinh {$name} khong ton tai voi gia tri : {$value}";
        echo "<br/>";
    }
}

$a = new A;
//echo $a->getName();
//$a->getAge(1,2,3); // vi ko ton tai phuong thuc trong class nen loi => muon het loi nay se goi __call trong class de bat loi
//A::getEmail('teo@gmail.com'); // loi vi ko ton tai phuong thuc static getEmail trong class ==> muon het loi thi dung thang __callStatic de bat loi//

$a->age = 20; // thuoc tinh ko ton tai trong class
