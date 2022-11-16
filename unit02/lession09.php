<?php

namespace App\Controller;

require 'lession08.php';

use App\Trait\A;

class B
{
    public $money = 1000;
    public function getMoney()
    {
        return $this->money;
    }
}
class C extends B
{
    use A; //su dung luon trait A
    // class C vua dung ca class B va trait A   
}
$c = new C;
echo $c->getMoney();
echo "</br>";
echo $c->getName();

