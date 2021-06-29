<?php require "Product.class2.php" ?>
<!DOCTYPE html>
<html>
<head>
<title>work2</title>
</head>
<body>

<?php
$product = array();
$product[] = new Product("消しゴム", 140);
$product[] = new Product("ハサミ", 430);
?>
<table border="1">
<tr><th>名前</th><th>金額</th></tr>
<?php
foreach($product as $pr){
?>
<tr>
    <td><?php print $pr->getName(); ?></td>
    <td><?php print $pr->getPrice(); ?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
