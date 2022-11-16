<?php
// dinh nghia interface
interface A 
{
    // khong duoc phep dinh nghia thuoc tinh
    // chi duoc phep dinh nghia phuong thuc rong nhung o dang public 
    public function getAge();
    // phuong thuc rong: khong co function body
    public function getName();
}
// interface khong phai 1 class thuan tuy - nen khong the khoi tao doi tuong 
// $a = new A; // sai'

//1 interface co the ke thua 1 interface khac 
interface B extends A
{
    public function getEmail();
}
// 1 class ke thua interface thi dung tu khoa implements
//khi 1 class ke thua interface thi no phai override lai toan bo cac phuong thuc cua interface (tinh da hinh)

class C implements B
{
    public function getAge()
    {

    }
    public function getName()
    {
        return "Tom and Jerry";
    }
    public function getEmail()
    {
        return 'Tom@gmail.com';
    }   
}
$c = new C;
echo $c->getName();