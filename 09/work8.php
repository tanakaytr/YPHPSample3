<!DOCTYPE html>
<html>
<head>
<title>work8</title>
</head>
<body>
<?php

$files = ["sales.xls", "note.txt", "document.pdf", "index.html"];

$pattern = "\..+";

?>
<table border="2">
<tr><th>文字</th><th>拡張子</th></tr>
<?php
foreach($files as $file){
    print "<tr><td>{$file}</td>";
    if(preg_match("/". $pattern . "/" ,$file, $matched)){
        print "<td>{$matched[0]}</td>";
    } else {
        print "<td></td>";
    }
    print "</tr>";
}
?>
</body>
</html>
