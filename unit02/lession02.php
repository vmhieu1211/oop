<?php
//chong override(tinh da hinh)
class A
{
    public $age =20;
    //chong override 
    //class khac ke thua khong override lai method nay
    final public function getAge()
    {
        return $this->age;
    }
}

class B extends A
{
    public $age = 30;
    public function getAge()
    {
        return $this->age;
    }
}
$b = new B;
echo $b->getAge();