<!DOCTYPE html>
<html>
<head>
<title>work2</title>
</head>
<body>

<?php
$urls = [
    "http://www.yahoo.co.jp/",
    "http://www.rakuten.co.jp/",
    "http://www.amazon.co.jp/",
    "http://www.google.co.jp/",
];
?>
<table border = "1">
<tr><th>変換前</th><th>変換後</th></tr>
<?php
foreach($urls as $url){
    print "<tr><td>{$url}</td><td>";
    print substr($url, 7, -1);
    print "</td></tr>\n";
}
?>
</table>
</body>
</html>
