<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$ptr = array("PHP.", "^PHP..", ".PHP", "..PHP");
$str = array("PHP", "PHPP", "PHPPP", "PPHP", "PPPHP");

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>パターン</th>
<th>文字列</th>
<th>マッチ</th>
</tr>

<?php

foreach($ptr as $valueptr){
    foreach($str as $valuestr){
        print "<tr><td>{$valueptr}</td><td>{$valuestr}</td>";
        $mt = preg_match("/".$valueptr . "/", $valuestr) ? "〇": "×";
        print "<td>{$mt}</td></tr>\n";
    }
}

?>

</table>

</body>
</html>
