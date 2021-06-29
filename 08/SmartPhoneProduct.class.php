<?php require "Product.class3.php" ?>

<?php

class SmartPhoneProduct extends Product
{
    private $carrier = "キャリア";
    private $maker = "メーカ";
    
    public function __construct($nm, $pr, $ca, $ma)
    {
        parent::__construct($nm, $pr);
        $this->carrier = $ca;
        $this->maker = $ma;
    }
    public function getCarrier(){return $this->carrier;}
    public function getMaker(){return $this->maker;}

}
 
?>
