<?php
class GiaiPTBH
{
    //ax^2 + bx + c = 0
    private $a;
    private $b;
    private $c;
    public function __construct($a,$b,$c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    private function kiemTraHeSoThuNhat() : bool
    {
        if($this->a === 0){
            return false;
        }
        return true;
    }
    public function tinhDenTa()
    {
       return ($this->b*$this->b)-4*($this->a*$this->c);
    }
    private function kqDenTa()
    {
        if($this->tinhDenTa > 0){
            echo "pt co 2 nghiem";
        }
        else{
            echo "pt vo nghiem";
        } if($this->tinhDenTa ===0){
            echo  "pt co nghiem kep";
            // return $this;
        }
    }
    
    private function timNghiem() 
    {
        if($this->tinhDenTa()){
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
$ptbh = new GiaiPTBH(1,2,2);
$nghiem = $ptbh->ketQua();
echo $nghiem;
$denta = $ptbh->tinhDenTa();
echo "<br/>";
echo "denta = $denta";