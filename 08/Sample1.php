<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$pr = new Person;
$pr->name = "鈴木";
$pr->age = 56;

?>

<table border="2">
<tr bgcolor = "#AAAAAA">
<th>名前</th>
<th>年齢</th>
</tr>

<?php

print "<tr><td>";
print $pr->getname();
print "</td><td>";
print $pr->getage();
print "</td></tr>";

?>

</table>

<?php

class Person
{
    public $name = "姓名";
    public $age = 20;
    
    function getname(){return $this->name;}
    function getage(){return $this->age;}
}

?>

</body>
</html>
