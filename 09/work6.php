<!DOCTYPE html>
<html>
<head>
<title>work6</title>
</head>
<body>

<?php

$a = "日本列島";
$b = "学校法人日本体育大学";
$c = "新日本プロレス";
$d = "西日本新聞";

print mb_substr($a, 0, -2);
print mb_substr($b, 4, -4);
print mb_substr($c, 1, -4);
print mb_substr($d, 1, -2);

?>
</body>
</html>
