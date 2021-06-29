<!DOCTYPE html>
<html>
<head>
<title>work7</title>
</head>
<body>
<?php

$zipcode = ["123-4567", "1234567"];

$pattern = "^123";

?>

<table border="2">
<tr><th>文字</th><th>マッチ</th></tr>
<?php
foreach($zipcode as $zip){
    print "<tr><td>{$zip}</td>";
    if(preg_match("/".$pattern."/", "$zip")){
        print "<td>〇</td>";
    } else {
        print "<td>×</td>";
    }
    print "</tr>";
}
?>
</body>
</html>
