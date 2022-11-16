<?php
class A
{
    public $myAge;
    public function __construct($age)
    {
        $this->myAge=$age;
        //tham so truyen vao method __construct
    }
    public function getAge()
    {
        return $this->myAge;
    }
}
$a = new A(20); // 20: tham so duoc nhan __construct
//khi khoi tao doi tuong truyen tham so vao thi tham so do se duoc nhan o method __construct trong class
echo $a->getAge();