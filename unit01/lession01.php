<?php
// class va object
// 1 dinh nghia class
class Student
{
    // body class
    // dinh nghia - xy ly cac thuoc tinh va phuong thuc cua doi tuong thuoc class
    // thuoc tinh: dac diem tinh chat cua doi tuong
    // phuong thuc: hanh dong cua doi tuong

    // khai bao thuoc tinh
    public $name = 'Teo';
    // public : tu khoa khai bao pham vi hoat dong
    // $name: ten thuoc tinh
    // 'Teo': gia tri gan cho thuoc tinh
    private $msv = 21213213;
    // private : chi dc phep truy cap noi tai trong class
    protected $diemSo = 1;
    // protected: chi dc phep truy cap noi tai trong class va nhung class ke thua no

    // khai bao phuong thuc
    protected function diMuaSamVoiAiDo()
    {
        return 'ai do';
    }
    public function getName()
    {
        //var_dump($this);
        // doi tuong san co (noi tai) trong class
        // khong can khoi tao doi tuong gi ben trong class vi co san $this
        return $this->name . ' --- ' . $this->msv;
    }
    private function diChoiVoiBanGai()
    {
        return 'ban gi do';
    }
}

// 2 dinh nghia doi tuong
$svcntt = new Student; // khoi tao 1 doi thuoc class
$svck = new Student; // 
// truy cap vao thuoc tinh hoac phuong thuc tu ben ngoai class : can dung doi tuong thuoc class de truy cap vao chung (luu y: thuoc tinh va phuong thuc trong class ko khai bao them tu khoa "static")

$nameSVCNTT = $svcntt->name;
//echo $nameSVCNTT;
$nameSVCK = $svck->getName();
echo $nameSVCK;
// echo $svck->msv; // loi vi private ko truy cap ngoai class dc
//echo $svcntt->diChoiVoiBanGai();//loi vi private ko truy cap ngoai class dc
//echo $svcntt->diMuaSamVoiAiDo(); // loi vi protected ko truy cap ngoai class dc//