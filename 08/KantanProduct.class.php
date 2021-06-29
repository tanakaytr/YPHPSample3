<?php require_once "Product.class4.php"; ?>

<?php

class KantanProduct extends Product
{
    private $carrier = "キャリア";
    private $maker = "メーカ";
    
    public function __construct($nm, $pr, $ca, $ma)
    {
        parent::__construct($nm, $pr);
        $this->carrier = $ca;
        $this->maker = $ma;
        $this->setCategory("kantan");
    }
    public function getCarrier(){return $this->carrier;}
    public function getMaker(){return $this->maker;}
}

?>
