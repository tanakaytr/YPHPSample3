<?php

class Display
{
    protected $data = "key=>value";
    
    protected function __construct($data)
    {
        if(is_array($data)){
            $this->data = $data;
        } else {
            $this->data = [$data];
        }
    }
    public function show()
    { 
        $this->showHeader();
        $this->showData();
        $this->showFooter();
    }
    protected function showHeader(){}
    protected function showData(){}
    protected function showFooter(){}
}

?>
