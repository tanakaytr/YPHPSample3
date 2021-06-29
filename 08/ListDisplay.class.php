<?php require_once("Display.class.php"); ?>

<?php

class ListDisplay extends Display
{
    public function __construct($data)
    {
        parent::__construct($data);
    }
    
    protected function showHeader()
    {
        print "<dl>";
    }
   
    protected function showData()
    {
        foreach($this->data as $key =>$value){
            print "<dt>{$key}</dt>";
            print "<dd>{$value}</dd>";
        }
    }
    protected  function showFooter(){
        print "</dl>";
    }
}
?>
