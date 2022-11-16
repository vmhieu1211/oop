<?php
class A 
{
    protected static function sumNumber($n1, $n2)
    {
        return $n1 + $n2;
    }
}
// trong php chi ho tro don ke thua - 1 class chi co the ke thua truc tiep 1 class
// sau nay de khac phuc dieu nay thi php cung cap giai phap su dung: trait
class B extends A
{
    // override - tinh da hinh
    protected static function sumNumber($n1, $n2)
    {
        return $n1 - $n2;
    }
    public static function totalNumber($a, $b)
    {
        return parent::sumNumber($a, $b);
    }
}//
$sum = B::totalNumber(1,2);
echo $sum;