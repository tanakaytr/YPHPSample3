<?php require_once("Display.class.php"); ?>

<?php

class TableDisplay extends Display
{
    public function __construct($data)
    {
        parent::__construct($data);
    }
    
    protected function showHeader()
    {
        print '<table border="1">';
    }
   
    protected function showData()
    {
        foreach($this->data as $key =>$value){
            print "<tr>";
            print "<th>{$key}</th>";
            print "<td>{$value}</td>";
            print "</tr>";
        }
    }
    protected  function showFooter(){
        print "</table>";
    }
}
?>
