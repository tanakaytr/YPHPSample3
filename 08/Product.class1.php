<?php

class Product
{
    private $name = "名前";
    private $price = "金額";
   
    public function setName($nm){
        $this->name = $nm;
    }
    public function setPrice($pr){
        $this->price = $pr;
    }
    public function getName(){return $this->name;}
    public function getPrice(){return $this->price;}
    
}
    
?>
