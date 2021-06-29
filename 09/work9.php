<!DOCTYPE html>
<html>
<head>
<title>work9</title>
</head>
<body>
<?php

$a_tags = [
    "<a href=\"http://www.yahoo.co.jp/\">Yahoo</a>", 
    "<a href=\"http://www.rakuten.co.jp/\">Rakuten</a>",
    "<a href=\"http://www.amazon.co.jp/\">Amazon</a>",
    "<a href=\"http://www.google.co.jp/\">Google</a>",
];

$pattern = '\"(((\\\\\")|[^\"])*)\"';

?>
<table border="2">
<tr><th>文字</th><th>URL</th></tr>
<?php
foreach($a_tags as $a_tag){
    $a_tag_after = htmlspecialchars($a_tag, ENT_QUOTES, "UTF-8");
    print "<tr><td>{$a_tag_after}</td>";
    if(preg_match("/" . $pattern . "/",$a_tag, $matched)){
        print "<td>{$matched[0]}</td>";
    } else {
        print "<td></td>";
    }
    print "</tr>";
}
?>
</body>
</html>
