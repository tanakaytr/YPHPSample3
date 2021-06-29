<?php

class Category
{
    private $key = "キー";
    private $name = "名前";
    private $allowed_category = [
        "sp" => "スマートフォン",
        "keitai" =>  "携帯電話",
        "wifi" => "ポケットWiFi",
        "kids" => "キッズ携帯",
        "kantan" => "かんたん携帯"
    ];
    
    public function setCategoryKey($key){
        $keys = array_keys($this->allowed_category);
        if(in_array($key, $keys)){
            $this->key = $key;
            $this->name = $this->allowed_category[$key];
        }
    }
    public function getCategoryKey(){return $this->key;}
    public function getCategoryName(){return $this->name;}
}

?>
