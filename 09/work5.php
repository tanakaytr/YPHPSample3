<!DOCTYPE html>
<html>
<head>
<title>work5</title>
</head>
<body>

<?php
$tags = [
    "<font color='red'><b>Yahoo</b></font>",
    "<font color='darked'><b>Rakuten</b></font>",
    "<font color='darkorange'><b>Amazon</b></font>",
    "<font color='blue'><b>Google</b></font>",
];
?>
<table border = "1">
<tr><th>変換前</th><th>変換後</th></tr>
<?php
foreach($tags as $tag){
    $tag_after = h($tag);
    print "<tr><td>{$tag}</td>";
    print "<td>{$tag_after}</td></tr>";
}

function h($x)
{
    return htmlspecialchars($x);
}

?>
</table>
</body>
</html>
