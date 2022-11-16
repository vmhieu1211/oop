<?php
class GiaiPTBN
{
    // ax + b = 0;
    private $a;
    private $b;
    public function __construct($n,$m)
    {
        $this->a = $n;
        $this->b = $m;
    }
    private function kiemTraHeSoThuNhat() : bool
    {
        if($this->a === 0){
            return false;
        }
        return true;
    }
    private function timNghiem() 
    {
        if($this->kiemTraHeSoThuNhat()){
            //tien hanh di tim nghiem
            return -($this->b)/$this->a;
        }
        return null;
    }
    public function ketQua()
    {
        return $this->timNghiem();
    }
}
$ptbn = new GiaiPTBN(1,2);
$nghiem = $ptbn->ketQua();
echo $nghiem;