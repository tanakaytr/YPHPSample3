<?php

class Product
{
    protected $name = "名前";
    protected $price = "金額";
   
    public function __construct($nm, $pr){
        $this->name = $nm;
        $this->price = $pr;
    }
    public function getName(){return $this->name;}
    public function getPrice(){return $this->price;}
    
}
    
?>
