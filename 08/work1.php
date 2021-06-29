<?php require "Product.class1.php" ?>
<!DOCTYPE html>
<html>
<head>
<title>work1</title>
</head>
<body>

<?php
$product = new Product();
$product->setName("鉛筆");
$product->setPrice(120);
?>
<table border="1">
<tr><th>名前</th><th>金額</th></tr>
<tr>
    <td><?php print $product->getName(); ?></td>
    <td><?php print $product->getPrice(); ?></td>
</tr>
</table>
</body>
</html>
