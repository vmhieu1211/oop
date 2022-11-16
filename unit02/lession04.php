<?php
namespace App\Model;
// dang namespace phan cap

class A 
{
    protected $age = 10;
    public function getAge()
    {
        return $this->age . ' --- ' . __NAMESPACE__;
        //__NAMESPACE__ : lay ra ten namepsace
    }
}