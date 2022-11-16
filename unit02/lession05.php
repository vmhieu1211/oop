<?php
namespace App\Controller;

require 'lession04.php';

use App\Model\A as Model;//su dung namespace cua class A
// App\Model: ten cua namespace 
//A : ten class

class B extends Model
{

}
$b = new B();
echo $b->getAge();