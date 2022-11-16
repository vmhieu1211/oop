<?php
// abstract class
abstract class A 
{
    // duoc phep dinh nghia thuoc tinh
    // thong thuong thi thuoc tinh o dang protected hoac public
    public $name = "Teo";
    // duoc phep dinh nghia phuong thuc 
    // se co 2 loai phuong thuc 
    // 1 - phuong thuc abstract : phai la phuong thuc rong (duoc phep o dang protected hoac public)
    abstract public function getAge();
    abstract protected function getEmail();
    // 2 - phuong thuc binh thuong (khong co tu khoa abstract dung dang truoc )
    public function getName()
    {
        return $this->name;
    }
}
// khong the khoi tao doi tuong cho abstract class
// $a = new A; // sai

//mot abstract class co the ke thua 1 abstract class
abstract class B extends A 
{
    abstract public function getAddress();
}

// 1 class thuan tuy ke thua 1 abstract class thi phai override lai toan bo phuong thuc la abstract cua abstract class 

class C extends B
{
    public function getAge()
    {
        return $this->name;
    }
    protected function getEmail()
    {

    }
    public function getAddress()
    {

    }
}
$c = new C;
echo $c->getAge();