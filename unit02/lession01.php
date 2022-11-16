<?php
// chong ke thua - khong cho class khac duoc ke thua 
// su dung keyword final
final class A
{
    public $name = "Teo";
    public function getName()
    {
        return $this->name;
    }
}
/*
class B extends A
{
    // loi vi class A la final => cac class khac khong the truc tiepke thua
}
*/
$a = new A; // van la 1 class thuan tuy 
echo $a->getName();